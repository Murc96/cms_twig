<?php
require '../../src/bootstrap.php';

use EdvGraz\Validation\Validate;

$data['id']       = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT ) ?? '';
$tmp_path = $_FILES['image_file']['tmp_name'] ?? '';
$save_to  = '';

$data['article'] = [
	'id'          => $data['id'],
	'title'       => '',
	'summary'     => '',
	'content'     => '',
	'published'   => false,
	'category_id' => 0,
	'user_id'     => 0,
	'image_id'    => null,
	'image_file'  => '',
	'image_alt'   => '',
];

$data['errors'] = [
	'issue'      => '',
	'title'      => '',
	'summary'    => '',
	'content'    => '',
	'user'       => '',
	'category'   => '',
	'image_file' => '',
	'image_alt'  => '',
];
if ( $data['id']  ) {
	$data['article'] = $cms->getArticle()->fetch( $data['id'] , false );
	if ( ! $data['article'] ) {
		redirect( 'articles.php', [ 'error' => 'article not found' ] );
	}
}
$categories = $cms->getCategory()->getAll();
$users      = $cms->getUser()->getAll();

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	
	if ( isset( $_FILES['image_file'] ) ) {
		$image = $_FILES['image_file'];
		
		$data['errors']['filename'] = $image['error'] === 1 ? 'The image is to large ' : '';
		
		if ( $tmp_path && $image['error'] === UPLOAD_ERR_OK ) {
			
			$data['article']['image_alt'] = filter_input( INPUT_POST, 'image_alt' );
			
			$data['errors']['image_alt'] = Validate::is_text( $data['article']['image_alt'], 1, 254 ) ? '' : 'Alt text must be between 1 and 254 characters';
			
			$typ                  = mime_content_type( $tmp_path );
			$data['errors']['image_file'] .= in_array( $typ, MEDIA_TYPES ) ? '' : 'The file type is not allowed';
			
			$extension            = pathinfo( strtolower( $image['name'] ), PATHINFO_EXTENSION );
			$data['errors']['image_file'] .= in_array( $extension, FILE_EXTENSIONS ) ? '' : 'The file extension is not allowed';
			
			$data['errors']['image_file'] .= $image['size'] > MAX_FILE_SIZE ? 'The image exceeds the maximum upload size' : '';
			
			if ( $data['errors']['image_file'] === '' && $data['errors']['image_alt'] === '' ) {
				$data['article']['image_file'] = $image['name'];
				$save_to               = get_file_path( $image['name'], UPLOAD_DIR );
			}
		}
	}
	
	$data['article']['title']       = filter_input( INPUT_POST, 'title' );
	$data['article']['summary']     = filter_input( INPUT_POST, 'summary' );
	$data['article']['content']     = filter_input( INPUT_POST, 'content' );
	$data['article']['user_id']     = filter_input( INPUT_POST, 'user', FILTER_VALIDATE_INT );
	$data['article']['category_id'] = filter_input( INPUT_POST, 'category', FILTER_VALIDATE_INT );
	$data['article']['published']   = filter_input( INPUT_POST, 'published', FILTER_VALIDATE_BOOLEAN ) ? 1 : 0;

	$purifier = new HTMLPurifier();
	$purifier->config->set('HTML.Allowed', 'p,br,strong,em,a[href],i,u,ul,ol,li,img[src|alt]');
	$data['article']['content'] = $purifier->purify( $data['article']['content']);

	
	$data['errors']['title']    = Validate::is_text($data['article']['title'] ) ? '' : 'Title must be between 1 and 100 characters';
	$data['errors']['summary']  = Validate::is_text( $data['article']['summary'], 1, 200 ) ? '' : 'Summary must be between 1 and 200 characters';
	$data['errors']['content']  = Validate::is_text( $data['article']['content'], 1, 10000 ) ? '' : 'Content must be between 1 and 10.000 characters';
	$data['errors']['user']     = Validate::is_user_id( $data['article']['user_id'], $users ) ? '' : 'User not found';
	$data['errors']['category'] = Validate::is_category_id( $data['article']['category_id'], $categories ) ? '' : 'Category not found';

	$problems = implode( $data['errors'] );

	if ( ! $problems ) {
		
		$bindings = $data['article'];
		unset( $bindings['author'], $bindings['category'], $bindings['created'] );
		if ( $save_to ) {
			scale_and_copy( $tmp_path, $save_to );
			$image_id             = $cms->getImage()->save( $bindings['image_file'], $bindings['image_alt'] );
			$bindings['image_id'] = $image_id;
		}
		unset( $bindings['image_file'], $bindings['image_alt'] );
		if ( $id ) {
			$cms->getArticle()->update( $bindings );
			redirect( 'articles.php', [ 'success' => 'Article successfully updated ' ] );
		} else {
			unset( $bindings['id'] );
			$cms->getArticle()->push( $bindings );
			redirect( 'articles.php', [ 'success' => 'Article successfully saved' ] );
		}
	}
}




echo $twig->render('admin/article.html', $data);
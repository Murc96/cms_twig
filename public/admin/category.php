<?php
require '../../src/bootstrap.php';

$data['id']     = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT ) ?? '';
$data['errors']  = [
	'issue'       => '',
	'name'        => '',
	'description' => '',
];

$data['category'] = [
	'id'          => '',
	'name'        => '',
	'description' => '',
	'navigation'  => false
];

if ( $data['id'] ) {
	$data['category'] = $cms->getCategory()->fetch( $data['id'] );
	if ( ! $data['category'] ) {
		redirect( 'categories.php', [ 'error' => 'category not found' ] );
	}
}
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
	$data['category']['name']        = filter_input( INPUT_POST, 'name' );
	$data['category']['description'] = filter_input( INPUT_POST, 'description' );
	$data['category']['navigation']  = filter_input( INPUT_POST, 'navigation', FILTER_VALIDATE_BOOLEAN ) ?? 0;
	
	$data['errors']['name']        = Validate::is_text( $data['category']['name'], 1, 50 ) && ( ! empty( $data['category']['name'] ) ) ? ''
		: 'Name must be between 1 and 50 characters';
		$data['errors']['description'] = Validate::is_text( $data['category']['description'], 1, 254 ) && ( ! empty( $data['category']['description'] ) ) ? ''
		: 'Description must be between 1 and 254 characters';

	$problems = implode( $data['errors'] );

	if ( ! $problems ) {
		$bindings = [
			'name'        => $data['category']['name'],
			'description' => $data['category']['description'],
			'navigation'  => $data['category']['navigation']
		];
		try {
			if ( $data['id']  ) {
				$bindings['id'] = $data['id'] ;
				$cms->getCategory()->update( $bindings );
				redirect( 'categories.php', [ 'success' => 'category successfully saved' ] );
			} else {
				$cms->getCategory()->push( $bindings );
				redirect( 'categories.php', [ 'success' => 'category successfully saved' ] );
			}
		} catch ( PDOException $e ) {
			$data['errors']['issue'] = 'Name already in use';
		}
	} else {
		$data['errors']['issue'] = 'Please correct the following issues: ' . $problems;
	}
}

echo $twig->render('admin/category.html', $data);



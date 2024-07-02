<?php
require '../src/bootstrap.php';

$data['search_term'] = filter_input( INPUT_GET, 'search' );
$data['per_page']   = filter_input( INPUT_GET, 'per_page', FILTER_VALIDATE_INT ) ?? 3;
$data['offset']      = filter_input( INPUT_GET, 'offset', FILTER_VALIDATE_INT ) ?? 0;
$data['articles']   = [];
$data['count']       = 0;

if ( ! empty( $data['search_term'] ) ) {
	$data['count'] = $cms->getArticle()->count( $data['search_term'] );
	if ( $data['count'] > 0 ) {
		$data['articles'] = $cms->getArticle()->limit( $data['search_term'], $data['per_page'], $data['offset'] );
	}
}
if ( $data['count'] > $data['per_page'] ) {
	$data['total_pages']  = ceil( $data['count']  / $data['per_page'] );
	$data['current_pages'] = ceil( $data['offset'] / $data['per_page'] ) + 1;
}

$data['navigation']  = $cms->getCategory()->fetchNavigation();
$section     = '';
$data['title']       = 'Search Results for ' . $data['search_term'];
$data['description'] = 'Search Results for ' . $data['search_term'] . ' the IT-News-Blog';

echo $twig->render('search.html', $data);




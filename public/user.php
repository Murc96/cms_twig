<?php
require '../src/bootstrap.php';

$id = filter_input( INPUT_GET, 'id', FILTER_VALIDATE_INT );
if ( ! $id ) {
	include APP_ROOT . '/public/page_not_found.php';
}

$data['user'] = $cms->getUser()->fetch( $id );
if ( ! $data['user'] ) {
	include APP_ROOT . '/public/page_not_found.php';
}
$data['articles']   = $cms->getArticle()->getAll( null, true, $id );
$data['navigation']  = $cms->getCategory()->fetchNavigation();
$data['title']       = $data['user']['forename'] . ' ' . $data['user']['surname'] . ' - IT-News';
$data['description'] = $data['title'];
$data['user']['joined'] = date("F j, Y",strtotime($data['user']['joined']));
$section     = '';

echo $twig->render('user.html', $data);







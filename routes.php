<?php
function call($controller, $action, $postID) {
	require_once('controllers/' . $controller . '_controller.php');
	switch($controller) {
		case 'pages':
		$controller = new PagesController();
		break;
		case 'posts':
 // necesitamos el modelo para después consultar a la BBDD desde el controlador
		require_once('models/post.php');
		$controller = new PostsController();
		break;
		case 'web':
		require_once('models/web.php');
		$controller = new WebController();
		break;
	}
	$controller->{ $action }($postID);
}
// agregando una entrada para el nuevo controlador y sus acciones.
$controllers = array( 'pages' => ['home', 'error'],
						'posts' => ['index', 'show', 'formInsertar', 'insertar', 'formUpdate', 'update', 'delete'],
						'web' => ['index', 'show', 'formInsertar', 'insertar', 'formUpdate', 'update', 'delete']
);
if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action, $postID);
	} else {
		call('pages', 'error', null);
	}
} else {
	call('pages', 'error', null);
}
?>
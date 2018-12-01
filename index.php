<?php
require_once('connection.php');

define('URL', 'http://localhost/blog_php_mvc');

if(isset($_GET['url'])){
	$url = $_GET['url']; // esto es el posts/index
	$url = rtrim($url, '/'); // esto quita las / innecesarias a la derecha

	//devolvemos un array utilizando la / como delimitador
	$url = explode('/', $url); // ['posts', 'index']
	$controller = $url[0];
	$action = $url[1];
	$postID = (!empty($url[2])) ? $url[2]:null;
}else{
	$controller = 'pages';
	$action = 'home';
	$postID = null;
}

$page_title = "Mvc";
require_once('views/layout.php');
require_once('views/header.php');
?>
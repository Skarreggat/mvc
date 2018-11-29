<?php
require_once('connection.php');
if (isset($_GET['controller']) && isset($_GET['action'])) {
	$controller = $_GET['controller'];
	$action = $_GET['action'];
}else {
	$controller = 'pages';
	$action = 'home';
}
$page_title = "Mvc";
require_once('views/layout.php');
require_once('views/header.php');
?>
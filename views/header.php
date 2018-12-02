<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $page_title; ?></title> <!--Ponemos titulo a nuestra pagina-->

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /><!--Css de bootstrap externo para tablas y botones-->
	<!-- our custom CSS -->
	<link rel="stylesheet" href="custom.css" /><!--Futuro archivo con el que personalizaremos el proyecto-->
</head>
<body>
	<div class="container">
		<br><!--//le pasamos la url amigable al boton-->
		<a href='<?php echo constant('URL'); ?>' class='btn btn-info left-margin'><span class='glyphicon glyphicon-home'></span> Home</a>
		<a href='<?php echo constant('URL'); ?>/posts/index' class='btn btn-info left-margin'><span class='glyphicon glyphicon-list'></span> Posts</a>
		<a href='<?php echo constant('URL'); ?>/posts/formInsertar' class='btn btn-info left-margin'><span class='glyphicon glyphicon-plus'></span> Crear Posts</a>
		<a href='<?php echo constant('URL'); ?>/web/index' class='btn btn-info left-margin'><span class='glyphicon glyphicon-list'></span> Webs</a>
		<a href='<?php echo constant('URL'); ?>/web/formInsertar' class='btn btn-info left-margin'><span class='glyphicon glyphicon-plus'></span> Crear Webs</a>
		<br>
		<br>
		<?php require_once('routes.php'); ?>

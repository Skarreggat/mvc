<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $page_title; ?></title>

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	<!-- our custom CSS -->
	<link rel="stylesheet" href="css/custom.css" />
	
	<!--<?php// require_once('views/posts/formUpdate.php'); ?>-->

</head>
<body>
	<div class="container">
		<br>
		<a href='<?php echo constant('URL'); ?>' class='btn btn-info left-margin'><span class='glyphicon glyphicon-home'></span> Home</a>
		<a href='<?php echo constant('URL'); ?>/posts/index' class='btn btn-info left-margin'><span class='glyphicon glyphicon-list'></span> Posts</a>
		<a href='<?php echo constant('URL'); ?>/posts/formInsertar' class='btn btn-info left-margin'><span class='glyphicon glyphicon-plus'></span> Crear Posts</a>
		<br>
		<br>
		<?php require_once('routes.php'); ?>

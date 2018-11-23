<DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
		<header>
			<a href='/blog_php_mvc'>Home</a>
			<a href='?controller=posts&action=index'>Posts</a>
			<a href='?controller=posts&action=formInsertar'>Crear Posts</a>
		</header>

		<?php require_once('routes.php'); ?>
		<!--<?php //require_once('views/posts/formInsertar.php'); ?>-->

		<footer>
			Copyright
		</footer>
	</body>
	</html>

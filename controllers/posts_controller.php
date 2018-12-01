<?php
class PostsController {
	public function index() {
 // Guardamos todos los posts en una variable
		$posts = Post::all();
		require_once('views/posts/index.php');
	}
	public function show($id) {
 // esperamos una url del tipo ?controller=posts&action=show&id=x
 // si no nos pasan el id redirecionamos hacia la pagina de error, el id tenemos que buscarlo en la BBDD
		if (!isset($id)) {
			return call('pages', 'error', null);
		}
 // utilizamos el id para obtener el post correspondiente
		$post = Post::find($id);
		require_once('views/posts/show.php');
	}

	public function formInsertar(){
		require_once('views/posts/formInsertar.php');
	}

	public function insertar(){
		$post = Post::insertar();
		call('posts', 'index', null);
	}

	public function formUpdate($id){
		$post = Post::find($id);
		require_once('views/posts/formUpdate.php');
	}

	public function update(){
		$post = Post::update();
		call('posts', 'index', null);
	}

	public function delete($id){
		$post = Post::delete($id);
		call('posts', 'index', null);
	}
}
?>
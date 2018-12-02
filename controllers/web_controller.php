<?php
class WebController {
	public function index() {
 // Guardamos todos las webs en una variable
		$web = Web::all();
		require_once('views/web/index.php');
	}
	public function show($id) {
 // si no nos pasan el id redirecionamos hacia la pagina de error, el id tenemos que buscarlo en la BBDD
		if (!isset($id)) {
			return call('pages', 'error', null);
		}
 // utilizamos el id para obtener el post correspondiente
		$web = Web::find($id);
		require_once('views/web/show.php');
	}

	public function formInsertar(){
		$web = Web::all();
		require_once('views/web/formInsertar.php');
	}

	public function insertar(){
		$web = Web::insertar();
		call('web', 'index', null);
	}

	public function formUpdate($id){
		$web = Web::find($id);
		$web2 = Web::all();
		require_once('views/web/formUpdate.php');
	}

	public function update(){
		$web = Web::update();
		call('web', 'index', null);
	}

	public function delete($id){
		$web = Web::delete($id);
		call('web', 'index', null);
	}
}
?>
<?php
class PostsController {
	public function index() {
 // Guardamos todos los posts en una variable
		$posts = Post::all();
		require_once('views/posts/index.php');
	}
	public function show() {
 // esperamos una url del tipo ?controller=posts&action=show&id=x
 // si no nos pasan el id redirecionamos hacia la pagina de error, el id tenemos que buscarlo en la BBDD
		if (!isset($_GET['id'])) {
			return call('pages', 'error');
		}
 // utilizamos el id para obtener el post correspondiente
		$post = Post::find($_GET['id']);
		require_once('views/posts/show.php');
	}

	public function formInsertar(){
		require_once('views/posts/formInsertar.php');
	}

	public function insertar(){
		$post = Post::insertar($_GET['id']);
		/*$query = "INSERT INTO " . $this->table_name . "
            SET author=:author, created=:created";
        $stmtFab = $this->conn->prepare($query);
 
        // posted values
        $this->author=htmlspecialchars(strip_tags($this->author));
 
        // to get time-stamp for 'created' field
        $this->timestamp = date('Y-m-d H:i:s');
 
        // bind values 
        $stmtFab->bindParam(":author", $this->author);
        $stmtFab->bindParam(":created", $this->timestamp);
        //var_dump($stmtFab);
        if($stmtFab->execute()){
            return true;
        }else{
            return false;
        }*/
	}
}
?>
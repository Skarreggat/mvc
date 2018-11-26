<?php
class Post {
 // definimos tres atributos
 // los declaramos como públicos para acceder directamente $post->author
	public $id;
	public $author;
	public $content;
	public $titulo;
	public $image;
	public function __construct($id, $author, $content, $image, $titulo) {
		$this->id = $id;
		$this->author = $author;
		$this->content = $content;
		$this->image = $image;
		$this->titulo = $titulo;
	}
	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM posts');

 // creamos una lista de objectos post y recorremos la respuesta de la consulta
		foreach($req->fetchAll() as $post) {
			$list[] = new Post($post['id'], $post['author'], $post['content'], $post['image'], $post['titulo']);
		}
		return $list;
	}
	public static function find($id) {
		$db = Db::getInstance();
 // nos aseguramos que $id es un entero
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM posts WHERE id = :id');
 // preparamos la sentencia y reemplazamos :id con el valor de $id
		$req->execute(array('id' => $id));
		$post = $req->fetch();
		return new Post($post['id'], $post['author'], $post['content'], $post['image'], $post['titulo']);
	}
	public static function insertar(){
		$db = Db::getInstance();
		$req = $db->prepare("INSERT INTO posts
            SET author=:author, content=:content, titulo=:titulo, image=:image, created=:created");

        $author=htmlspecialchars(strip_tags($_POST['author']));
 		$content=htmlspecialchars(strip_tags($_POST['content']));
 		$image=htmlspecialchars(strip_tags($_FILES['image']['name']));
 		$titulo=htmlspecialchars(strip_tags($_POST['titulo']));
        $timestamp = date('Y-m-d H:i:s');
        $image=!empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
    	
        // bind values 
        $req->bindParam(":author", $author);
        $req->bindParam(":content", $content);
        $req->bindParam(":image", $image);
        $req->bindParam(":titulo", $titulo);
        $req->bindParam(":created", $timestamp);
        $req->execute();
	}
}

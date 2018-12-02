<?php
class Web {
 // definimos tres atributos
	public $id;
	public $author_id;
	public $section;
	public $colaborator;
	public $colaboratorDate;
	public function __construct($id, $author_id, $section, $colaborator, $colaboratorDate) {
		$this->id = $id;
		$this->author_id = $author_id;
		$this->section = $section;
		$this->colaborator = $colaborator;
		$this->colaboratorDate = $colaboratorDate;
	}
	public static function all() {
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM web');

 // creamos una lista de objectos web y recorremos la respuesta de la consulta
		foreach($req->fetchAll() as $web) {
			$list[] = new Web($web['id'], $web['author_id'], $web['section'], $web['colaborator'], $web['colaboratorDate']);
		}
		return $list;
	}
	public static function find($id) {
		$db = Db::getInstance();
 // nos aseguramos que $id es un entero
		$id = intval($id);
		$req = $db->prepare('SELECT * FROM web WHERE id = :id');
 // preparamos la sentencia y reemplazamos :id con el valor de $id
		$req->execute(array('id' => $id));
		$web = $req->fetch();
		return new Web($web['id'], $web['author_id'], $web['section'], $web['colaborator'], $web['colaboratorDate']);
	}

	public static function insertar(){
		$db = Db::getInstance();
		$req = $db->prepare("INSERT INTO web
			SET author_id = :author_id,
			section = :section,
			colaborator = :colaborator,
			colaboratorDate = :colaboratorDate, created=:created");

		$author_id=htmlspecialchars(strip_tags($_POST['author_id']));
		$section=htmlspecialchars(strip_tags($_POST['section']));
		$colaborator=htmlspecialchars(strip_tags($_POST['colaborator']));
		$colaboratorDate=htmlspecialchars(strip_tags($_POST['colaboratorDate']));
		$timestamp = date('Y-m-d H:i:s');

        // bind values 
		$req->bindParam(":author_id", $author_id);
		$req->bindParam(":colaboratorDate", $colaboratorDate);
		$req->bindParam(":section", $section);
		$req->bindParam(":colaborator", $colaborator);
		$req->bindParam(":created", $timestamp);

		if($req->execute()){
			return true;
		}else{
			return false;
		}
	}

	public static function update(){
		$db = Db::getInstance();
		$req = $db->prepare("UPDATE web SET
			author_id = :author_id,
			section = :section,
			colaborator = :colaborator,
			colaboratorDate = :colaboratorDate
			WHERE
			id = :id");

		$author_id=htmlspecialchars(strip_tags($_POST['author_id']));
		$section=htmlspecialchars(strip_tags($_POST['section']));
		$colaborator=htmlspecialchars(strip_tags($_POST['colaborator']));
		$colaboratorDate=htmlspecialchars(strip_tags($_POST['colaboratorDate']));
		$id=htmlspecialchars(strip_tags($_POST['id']));

    // bind parameters
		$req->bindParam(":author_id", $author_id);
		$req->bindParam(":colaboratorDate", $colaboratorDate);
		$req->bindParam(":section", $section);
		$req->bindParam(":colaborator", $colaborator);
		$req->bindParam(":id", $id);

    // execute the query
		if($req->execute()){
			return true;
		}else{
			return false;
		}

	}
	public static function delete($id){

		$db = Db::getInstance();
		$req = $db->prepare("DELETE FROM web WHERE id = :id");
		
		$req->bindParam(':id', $id);

		if($req->execute()){
			return true;
		}else{
			return false;
		}
	}
	/*function readOne($id){

 	$db = Db::getInstance();
    $req = $db->prepare("SELECT author_id, section, colaborator, colaboratorDate
        FROM web
        WHERE id = ?
        LIMIT 0,1");
 
    /*$req->bindParam(1, $id);
    $req->execute();
    //$row = $req->fetch(PDO::FETCH_ASSOC); 
    $author_id = $_POST['author_id'];
    $section = $_POST['section'];
    $colaborator = $_POST['colaborator'];
    $colaboratorDate = $_POST['colaboratorDate'];

    $author_id=htmlspecialchars(strip_tags($_POST['author_id']));
		$section=htmlspecialchars(strip_tags($_POST['section']));
		$colaborator=htmlspecialchars(strip_tags($_POST['colaborator']));
		$colaboratorDate=htmlspecialchars(strip_tags($_POST['colaboratorDate']));

    // bind parameters
		$req->bindParam(":author_id", $author_id);
		$req->bindParam(":colaboratorDate", $colaboratorDate);
		$req->bindParam(":section", $section);
		$req->bindParam(":colaborator", $colaborator);
		$req->bindParam(1, $id);
    $req->execute();
	}*/
}

<?php
namespace app\models;

use PDO;

class Post extends \app\core\Model{
	public $post_id;
	public $message;
	public $password_hash;

	//implement CRUD
	
	//insert
	public function insert(){
		//define the SQL query
		$SQL = 'INSERT INTO post (message, password_hash) VALUES (:message, :password_hash)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = ['message' => $this->message,
				'password_hash' => $this->password_hash];
		$STMT->execute($data);
	}

	public function getById($post_id){
		$SQL = 'SELECT * FROM post WHERE post_id = :post_id';//define SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['post_id' => $post_id]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Post');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	public function getAll(){
		$SQL = 'SELECT * FROM post';//define SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute();//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Post');
		return $STMT->fetchAll();
	}

	//update
	public function update(){
		//change anything but the PK
		$SQL = 'UPDATE post SET message = :message, password_hash = :password_hash WHERE post_id = :post_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute((array)$this);
	}

	//delete
	function delete(){
		$SQL = 'DELETE FROM post WHERE post_id = :post_id';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['post_id'=>$this->post_id];
		$STMT->execute($data);
	}
}
<?php
namespace app\controllers;

class Post extends \app\core\Controller{

	function index(){
		$post = new \app\models\Post();
		$posts = $post->getAll();
		$this->view('Post/list',$posts);
	}
	
	function edit($post_id){
		$post = new \app\models\Post();
		$post = $post->getById($post_id);
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$password = $_POST['password'];
			if($post && password_verify($password, $post->password_hash)){
				//remember that this is the user logging in...
				$post->message = $_POST['message'];
				$post->update();

				header('location:/Post/index');
			}else{
				header('location:/Post/edit/'.$post_id);
			}
		}else{
			$this->view('Post/edit',$post);
		}
	}

	function create(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$post = new \app\models\Post();
			$post->message = $_POST['message'];
			$post->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$post->insert();
			header('location:/Post/index');
		}else{
			$this->view('Post/create');
		}
	}

	function delete($post_id){
		$post = new \app\models\Post();
		$post = $post->getById($post_id);
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$password = $_POST['password'];
			if($post && password_verify($password, $post->password_hash)){
				//remember that this is the user logging in...
				$post->delete();

				header('location:/Post/index');
			}else{
				header('location:/Post/delete/'.$post_id);
			}
		}else{
			$this->view('Post/delete',$post);
		}
	}
}
<?php

class AddRegisterController extends Controller{

	public $registerUser;

	public function defaultTask(){

		$this->registerUser = new User();
		$this->set('task', 'add');


	}

	public function add(){

			$this->registerUser = new User();

			$data = array('first_name'=>$_POST['user_first_name'],'last_name'=>$_POST['user_last_name'],'email'=>$_POST['user_email'],'password'=>$_POST['user_password']);


			$result = $this->postObject->addUser($data);

			$this->set('message', $result);


	}

	public function edit($pID){

			$this->registerUser = new User();

			$user = $this->registerUser->getUser($pID);

			$this->set('pID', $post['pID']);
			$this->set('first_name', $post['first_name']);
			$this->set('last_name', $post['last_name']);
			$this->set('email', $post['email']);
			$this->set('password', $post['password']);
			$this->set('task', 'update');



	}


}

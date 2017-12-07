<?php

class CommentsController extends Controller{

	public $commentObject;

	  protected $access = "1";

		public function index() {
			$this->set('task', 'saveComment');
	    }

		public function saveComment(){
		$this->commentObject = new Comment();
		$data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['comment'],'date'=>$_POST['date'],'postID'=>$_POST['pID']);
		$result = $this->commentObject->addComments($data);
		$this->set('message', $result);

		}

}

?>

<?php

class CommentsController extends Controller{

	public $commentObject;

	  protected $access = "1";

   	public function comment($commentID){
        $this->commentObject = new Comment();
		$Comment = $this->commentObject->getComment($commentID);
	  	$this->set('Comment',$Comment);
   	}

	public function index(){
		$this->commentObject = new Comment();
		$comments = $this->commentObject->getAllComments();
		$this->set('title', 'The Comment View');
		$this->set('comments',$comments);
	}

}

public function addComment(){
$this->commentObject = new Comment();
$this->set('task', 'saveComment');
}

public function saveComment(){
$this->commentObject = new Comment();
$data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['comment'],'date'=>$_POST['date'],'postID'=>$_POST['pID']);


//$this->getCategories();

$result = $this->postObject->addComments($data);
$this->set('message', $result);
}

?>

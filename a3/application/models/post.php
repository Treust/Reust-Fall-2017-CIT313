<?php
class Post extends Model{

	function getPost($pID){

		$sql =  'SELECT Posts.pID, posts.title, Posts.content, Posts.categoryID, Categories.name, Posts.uID, Posts.date FROM posts INNER JOIN Categories ON Posts.categoryID=Categories.categoryID WHERE pID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($pID));

		$post = $results;

		return $post;

	}

	public function getAllPosts($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}

		$sql =  'SELECT Posts.pID, posts.title, Posts.content, Posts.categoryID, Categories.name, Posts.uID, Posts.date FROM posts INNER JOIN Categories ON Posts.categoryID=Categories.categoryID WHERE pID = ?';

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;

	}

	public function addPost($data){

		$sql='INSERT INTO posts (title,content) VALUES (?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;

	}


}

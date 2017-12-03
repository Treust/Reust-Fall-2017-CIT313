<?php
class Comments extends Model{

    function getComments($commentID){
        $sql = 'SELECT k.commentID, k.uid, k.CommentText, k.date, p.pID u.first_name, u.last_name FROM comments k
		INNER JOIN comments k on k.postID = p.pID
		INNER JOIN users u on u.uID = k.uID
		WHERE k.postID = ?
		';
        $results = $this->db->getrow($sql, array($commentID));

        $comment = $results;

        return $comment;

    }


    public function getAllComments($limit = 0){

        if($limit > 0){

            $numcomments = ' LIMIT '.$limit;
        }
        $sql = 'SELECT k.commentID, k.uid, k.CommentText, k.date, p.pID u.first_name, u.last_name FROM comments k
		INNER JOIN comments k on k.postID = p.pID
		INNER JOIN users u on u.uID = k.uID'.$numcomments;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;

    }

    public function addComments($data){

        $sql='INSERT INTO comments (uID,CommentText,date,postID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Comment added.';
        return $message;

    }


}

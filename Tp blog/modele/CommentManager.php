<?php

class CommentManager
{
  public function postComment($postId, $author, $comment)
  {
    $db = $this->dbConnect();
    $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

      return $affectedLines;
  }


   //Edit comment
   public function editComment($newComment, $commentID)
   {
       $db = $this->dbConnect();
       $newComments = $db->prepare('UPDATE comments SET comment = ? WHERE id=?');
       $affectedComment = $newComments->execute(array($newComment, $commentID)); //ligne 31

       return $affectedComment;
   }



  public function getComments($postId)
  {
      $db = $this->dbConnect();
      $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
      $comments->execute(array($postId));

      return $comments;
  }


  private function dbConnect()
  {
          $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
          return $db;
  }
}

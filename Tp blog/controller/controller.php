<?php

require_once('modele/CommentManager.php');
require_once('modele/PostManager.php');

function addComment($postId, $author, $comment)
{
  $commentManager = new CommentManager();
   $affectedLines = $commentManager->postComment($postId, $author, $comment);
   if ($affectedLines === false)
   {
       throw new Exception('Impossible d\'ajouter le commentaire !');
   }
   else
   {
       header('Location: index.php?action=post&id=' . $postId);
   }
}

function editForm($id)
{
    $commentID=$id;
    require('views/commentView.php');
}

function edit($newComment, $commentID, $postId)
{
    $commentManager = new CommentManager();
    $affectedComment = $commentManager->editComment($newComment,$commentID);

      header('Location: index.php?action=post&id=2' . $postId);
    

}
function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet
    require('views/listPostsView.php');
}

function post()
{
  $postManager = new PostManager();
  $commentManager = new CommentManager();

  $post = $postManager->getPost($_GET['id']);
  $comments = $commentManager->getComments($_GET['id']);

  require('views/postView.php');
}

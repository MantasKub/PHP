<?php

namespace Controllers;

use \Models\Comments;

class Comm
{

  public static function addComments()
  {
    $comments = new Comments();
    $comments->addRecord($_POST);
  }

  public static function showComments($id)
  {
    $comments = new Comments();
    $comments = $comments->getComments($id);

    include 'views/comments.php';
  }
}

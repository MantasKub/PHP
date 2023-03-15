<?php

namespace Controllers;

use \Models\Comments;

class Comm
{

  public static function handleComments()
  {
    $comments = new Comments();
    $comments->addRecord($_POST);

    $comments = new Comments();
    $comments = $comments->getRecords();

    include 'views/comments.php';
  }
}

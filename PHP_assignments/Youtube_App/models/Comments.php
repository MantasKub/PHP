<?php

namespace Models;

class Comments extends Database
{
  public $table = 'comments';

  function getComments($id)
  {
    $result = self::$db->query("SELECT * FROM $this->table WHERE com_id = $id");

    return $result->fetch_all(MYSQLI_ASSOC);
  }
}

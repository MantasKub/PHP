<?php

namespace Models;

class Videos extends Database
{

  public $table = 'videos';

  //-------------Videos by categories------------
  function categoryVideos($id)
  {
    $result = self::$db->query("SELECT * FROM $this->table WHERE category_id = $id");

    return $result->fetch_all(MYSQLI_ASSOC);
  }


  //--------------Search for videos-----------
  public function searchContent($searchTerm)
  {

    $results = self::$db->query("SELECT * FROM $this->table WHERE name LIKE '%$searchTerm%'");

    $results->fetch_all(MYSQLI_ASSOC);

    return $results;
  }


  //----------------Go to video--------------------????????????????????????????????
  public function goToVideo($id)
  {
    $result = self::$db->query("SELECT * FROM $this->table WHERE id = $id");

    return $result->fetch_all(MYSQLI_ASSOC);
  }
}

<?php

namespace Controllers;

class Search
{
  public static function search()
  {

    $searchTerm = $_GET['search'];

    $videos = new \Models\Videos;
    $results = $videos->searchContent($searchTerm);

    $results->fetch_all(MYSQLI_ASSOC);

    include 'views/search.php';
  }
}

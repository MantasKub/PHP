<?php

namespace Controllers;

use \Models\Videos;
use \Models\Categories;

class Homepage
{
  public static function index()
  {
    $videos = new Videos();
    $videos = $videos->getRecords();

    $categories = new Categories();
    $categories = $categories->getRecords();

    include 'views/homepage.php';
  }

  public static function byCategory($id)
  {
    $videos = new Videos();
    $videos = $videos->categoryVideos($id);

    $categories = new Categories();
    $categories = $categories->getrecords();

    include 'views/homepage.php';
  }

  public static function addVideoIndex()
  {
    include  'views/addSongForm.php';
  }

  public static function processAddVideo()
  {
    $videos = new Videos();
    $videos = $videos->addRecord($_POST);

    return header('Location: ?page=/');
  }
}

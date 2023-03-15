<?php

namespace Controllers;

use \Models\Videos;


class Video
{
  public static function toVideo($id)
  {
    $video = new Videos();
    $video = $video->goToVideo($id);

    include 'views/video.php';
  }
}

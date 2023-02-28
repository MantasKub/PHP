<?php

include 'models/Database.php';
include 'models/Videos.php';
include 'models/Categories.php';

$categories = new Categories();
$videos = new Videos();

// print_r($videos->getDatabase());
echo '<pre>';


//įrašo pridėjimas
// $videos->addRecord([
//   'name' => 'Best videos',
//   'video_url' => 'https://youtube.com',
//   'thumbnail_url' => 'https://youtube.com'
// ])->getRecordId();

// print_r($videos->getRecords());


//Įrašo atnaujinimas
// $videos->updateRecord(4, [
//   'name' => 'New',
//   'video_url' => 'https://youtube.com/1',
//   'thumbnail_url' => 'https://youtube.com/2'
// ]);

//Įrašo ištrinimas
// $videos->deleteRecord(5);

$videos->updateRecord(8, [
    'name' => 'New',
    'video_url' => 'https://youtube.com/1',
    'thumbnail_url' => 'https://youtube.com/2'
  ])->getRecords();
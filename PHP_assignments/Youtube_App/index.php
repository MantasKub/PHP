<?php

// include 'models/Database.php';
// include 'models/Videos.php';
// include 'models/Categories.php';

// include 'controllers/Homepage.php';

//Automatinis klasių pridėjimas
function autoload_classes($class) {

  if(is_file($class . '.php')) {
      include $class . '.php';
  }
}

spl_autoload_register('autoload_classes');

// $categories = new Categories();
// $videos = new Videos();

// print_r($videos->getDatabase());
// echo '<pre>';

//Video pridėjimas
// $videos->addRecord([
//   'name' => 'Best videos',
//   'video_url' => 'https://youtube.com',
//   'thumbnail_url' => 'https://youtube.com'
// ])->getRecordId();


//Visi video įrašai
// print_r($videos->getRecords());


//Video atnaujinimas
// $videos->updateRecord(4, [
//   'name' => 'New',
//   'video_url' => 'https://youtube.com/1',
//   'thumbnail_url' => 'https://youtube.com/2'
// ]);

//Video ištrinimas
// $videos->deleteRecord(5);

// print_r($videos->updateRecord(8, [
//     'name' => 'New',
//     'video_url' => 'https://youtube.com/1',
//     'thumbnail_url' => 'https://youtube.com/2'
//   ])->getRecords());


// Kategorijos pridėjimas
// $categories->addRecord([
//   'name' => 'Fishing'
// ])->getRecordId();

// Kategorijos atnaujinimas
//  $categories->updateRecord(0, [
//   'name' => 'Hunting'
// ]);

//Kategorijos ištrinimas
// $categories->deleteRecord(5);

//Visos kategorijos įrašai
// print_r($categories->getRecords());



//Routerio kūrimas

$page = isset($_GET['page']) ? $_GET['page'] : '';

switch($page) {
  case 'category':
    Controllers\Homepage::byCategory($_GET['id']);
    break;
  default:
  Controllers\Homepage::index();
}

  ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="views/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <title>Youtube App</title>
</head>

<body>





  <?php

  // include 'models/Database.php';
  // include 'models/Videos.php';
  // include 'models/Categories.php';

  // include 'controllers/Homepage.php';

  //Automatinis klasių pridėjimas
  function autoload_classes($class)
  {

    if (is_file($class . '.php')) {
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


  switch ($page) {
    case 'category':
      Controllers\Homepage::byCategory($_GET['id']);
      break;
    case 'search':
      Controllers\Search::search();
      break;
    case 'video':
      Controllers\Video::toVideo($_GET['id']);
      Controllers\Comm::handleComments();
      break;
      //---------Login Routas--------
    case 'login':
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        return Controllers\Auth::loginIndex();
        //-----------Login duomenų priėmimas-------------
      } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return Controllers\Auth::processLogin();
      }
      break;
      //--------------Register routas------------
    case 'register':
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        return Controllers\Auth::registerIndex();
      } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        return Controllers\Auth::processRegistration();
      }
      break;
    case 'addSong':
      // if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      //   return Controllers\Auth::registerIndex();
      // } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      //   return Controllers\Auth::processRegistration();
      // }
      include 'views/addSongForm.php';
      break;
    case 'seshdes':
      session_destroy();
      header('Location: ?page=/');
      //----------Titulinis puslapis---------
    default:
      Controllers\Homepage::index();
  }
  ?>

</body>

</html>
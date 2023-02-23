<?php
  session_start();
  try {
  $db = new mysqli('localhost', 'root', '', 'spotify');
  } catch(Exception $error) {
    echo '<h2>Nepavyko prisijungti prie duomenų bazės</h2>';
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="views/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Spotify App</title>
</head>
<body>

  

  <div class="container mt-3">

    <?php include('views/components/header.php'); ?>

    <?php if(isset($_GET['message'])) : ?>
      <div class="alert alert-<?= $_GET['status'] ?>">
        <?= $_GET['message']; ?>
      </div>
    <?php endif; ?>

    <?php 
      $page = isset($_GET['page']) ? $_GET['page'] : '';

      switch($page) {
        case 'register':
          include './views/pages/register.php';
          break;
        case 'login':
          include './views/pages/login.php';
          break;
        case 'admin':
          include './views/pages/admin.php';
          break;
        case 'playlist':
          include './views/pages/playlist.php';
          break;
        case 'logout':
          session_destroy();
          header('Location: ?page=login');
          break;
        case 'main';
          include './views/pages/main.php';
          break;
        default:
        include './views/pages/firstpage.php';
      }

    ?>
  </div>
</body>
</html>
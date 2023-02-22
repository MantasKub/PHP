<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/PHP/PHP_assignments/Spotify_App/css/style.css">
  <title>Spotify App</title>
</head>
<body>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" style="background-color: black">
  <div class="ms-2" style="width:130px">
  <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-play-circle-fill text-success" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
    </svg>
  </a>
  </div>
  <div class="text-success"><h3>Your music player</h3></div>
  <div class="col-md-3 text-end me-2">
    <?php
    if(!empty($_SESSION) && $_SESSION['user'] != "") { ?>
        <a type="button" class="btn btn=success" href="?page=login">Log-out</a> 
        <?php session_destroy() ?>
      <?php } else { ?>
        <a class="btn btn=success" href="?page=register">Sign-up</a> 
      <?php } ?>
    
  </div>
  </header>
</body>
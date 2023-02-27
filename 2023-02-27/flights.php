<?php

  include './pages/admin.php';

  try {
  $db = new mysqli('localhost', 'root', '', 'flights');
  } catch(Exception $error) {
    echo '<h2>Tinklapis neveikia</h2>';
    exit;
  }

    if(!empty($_POST)) {
      $db->query(
          "INSERT INTO flights_table (flight_to, flight_from, flight_number, flight_date) 
          VALUES ('$flight_to', '$flight_from', '$flight_number', '$flight_date')"
        );
    }

    if(isset($_POST)) {

$database->addFlight($_POST['flight_to'], $_POST['flight_from'], $_POST['flight_number'], $_POST['flight_date']);

if($database) {
  echo '<div class="alert alert-succes">Flight added</div>';
} else {
  echo '<div class="alert alert-danger">Something went wrong</div>';
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Flights</title>
</head>
<body>

<?php 
      $page = isset($_GET['page']) ? $_GET['page'] : '';

      switch($page) {
        case 'user':
          include './pages/user.php';
          break;
        case 'admin':
          include './pages/admin.php';
          break;
        case 'main':
          include './pages/main.php';
          break;
      }

    ?>


  
</body>
</html>
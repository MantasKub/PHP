<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="features.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>My Bank</title>
</head>
<body class="text-center">

<?php
  include('./views/header.php')
?>
<main>

<?php 

$page = isset($_GET['page']) ? $_GET['page'] : '';

switch($page) {
  case 'cards':
    include('./views/cards.php');
    break;
  case 'loans':
    include('./views/loans.php');
    break;
  case 'pension':
    include('./views/pension.php');
    break;
  case 'webBank':
    include('./views/webBank.php');
    break;
  case 'account' :
    include('./views/account.php');
    break;
  case 'logout' :
    session_destroy();
    include('./views/webBank.php');
    break;
  default:
    include('./views/home.php');
}
?>

</main>

<?php include('./views/footer.php')
?>
  
</body>
</html>
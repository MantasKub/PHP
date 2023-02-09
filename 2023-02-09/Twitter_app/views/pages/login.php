<?php 
  if(!empty($_POST)) {

    $params = [
      'page' => 'login',
      'message' => 'Database file not found',
      'status' => 'danger'
    ]; 


    if(!file_exists('./database.json')) {
      header('Location: ?' . http_build_query($params));
      exit;

  }
    
    $data = json_decode(file_get_contents('./database.json'), true);

    $userExists = array_filter($data, function($user) {
      if(
          $user['email'] === $_POST['email'] AND
          $user['password'] === md5($_POST['password']) );

        return true;

        return false;
    });

    if(empty($userExists)) {
      $params['message'] = 'Login credentials incorrect';
      header('Location: ?' . http_build_query($params));
      exit;
    }

    $_SESSION['user'] = $userExists;
    header('Location: ?page=/');

  }
?>

<h1>Log in</h1>

<form method="POST">
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" placeholder="test@gmail.com" class="form-control" required />
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required />
  </div>
  <button class="btn btn-primary">Log in</button>
</form>
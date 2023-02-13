
<?php 
  if(!empty($_POST)) {

    $data = [];

    if(file_exists('./database.json'))
      $data = json_decode(file_get_contents('./database.json'), true);

    $emailExists = array_filter($data, function($user) {
      if($user['email'] === $_POST['email'])
        return true;

        return false;
    });

    $params = [
      'page' => 'register',
      'message' => 'This ID is already taken',
      'status' => 'danger'
    ]; 

    if(!empty($emailExists)) {
      $params['message'] = 'This email adress is already taken'; 
    }


    //Sugeneruojame alerta jei ID jau yra uzimtas
    if(array_key_exists($_POST['id'], $data) OR !empty($emailExists)) {

      header('Location: ?' . http_build_query($params));
      exit;
    }
    
    $_POST['created_at'] = date('Y-m-d h:i:s');
    $_POST['password'] = md5($_POST['password']);

    $data['users'][$_POST['id']] = $_POST;

    file_put_contents('./database.json', json_encode($data));

    $params = [
      'page' => 'login',
      'message' => 'User successfuly registered',
      'status' => 'success'
    ]; 

    header('Location: ?' . http_build_query($params));


  }
?>


<h1>Registration</h1>

<form method="POST">
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" placeholder="test@gmail.com" class="form-control" required />
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required />
  </div>
  <div class="mb-3">
    <label>First name</label>
    <input type="text" name="first_name" class="form-control" required />
  </div>
  <div class="mb-3">
    <label>Last name</label>
    <input type="text" name="last_name" class="form-control" required />
  </div>
  <div class="mb-3">
    <label>Select ID</label>
    <input type="text" name="id" placeholder="@" class="form-control" required />
  </div>
  <button class="btn btn-primary">Register</button>
</form>
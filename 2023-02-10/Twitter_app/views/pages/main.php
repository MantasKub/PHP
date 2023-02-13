<?php 
  if(!isset($_SESSION['user'])) {
    header('Location: ?page=login');
    exit;
  }

  $data = json_decode(file_get_contents('./database.json'), true);

  $tweets = $data['tweets'];

  $order = isset($_GET['order']) ? $_GET['order'] : 'asc';

  if($order === 'dsc') {
     usort($tweets, function($a, $b) {
      if($a == $b) {
        return 0;
      }
      return ($b < $a) ? -1 : 1;
  });
 }

  if(!empty($_POST)) {
    $data['tweets'][] = [
      'message' => $_POST['tweet'],
      'created_at' => date('Y-m-d h:i:s'),
      'author' => $_SESSION['user']['id']
    ];

    //Failo ikelimas

    if(!empty($_FILES['tweet-photo']['tmp_name'])) {
      if(!is_dir('./uploads')) {
        mkdir('./uploads');
    }

    $filename = explode('.', $_FILES['tweet-photo']['name']);
    $filename = time() . '.' . $filename[count($filename) - 1];
    $allowedTypes = [
      'image/jpeg',
      'image/png',
      'image/gif',
      'image/webp'
    ];

    if(!in_array($_FILES['tweet-photo']['type'], $allowedTypes)) {
      $params = [
        'message' => 'Incorrect file format',
        'status' => 'danger'
      ]; 
      header('Location: ?' . http_build_query($params));
      exit;
    }

    //Failo ikelimas i uploads direkorija

    move_uploaded_file($_FILES['tweet-photo']['tmp_name'], './uploads/' . $filename);

    $data['tweets'][count($data['tweets']) - 1]['image'] = $filename;
  }

  file_put_contents('./database.json', json_encode($data));

  $params = [
    'message' => 'Tweet successfully posted',
    'status' => 'success'
  ]; 

  header('Location: ?' . http_build_query($params));
  exit;
}
?>

<h2>Post New Tweet</h2>
<form method="POST" enctype="multipart/form-data">
  <textarea name="tweet" class="form-control mb-3"></textarea>
  <input type="file" name="tweet-photo" class="form-control mb-3" />
  <button class="btn btn-primary">Tweet</button>
</form>
<div class="d-flex justify-content-between mt-5">
<h2 class="mb-3">Latest tweets</h2>
<form class="d-flex gap-3">
  <label>Select order:</label>
  <select name="order" class="form-control mb-3">
    <option value="asc">Asceding</option>
    <option value="dsc">Descending</option>
  </select>
  <button class="btn btn-primary mb-3">Order</button>
</form>
</div>

<?php 
  foreach($tweets as $tweet) : ?>
    <div class="card shadow-sm p-3 mb-3">
      <?php if(isset($tweet['image'])) : ?>
      <img src="uploads/<?= $tweet['image'] ?>" class="card-img-top" />
      <?php endif; ?>
      <div class="card-text mb-3">
        <?= $tweet['message'] ?>
      </div>
      <div class="d-flex justify-content-between align-items-center">
        <span><?=$tweet['author'] ?></span>
        <span><?=$tweet['created_at'] ?></span>
      </div>
    </div>
  <?php endforeach; ?>


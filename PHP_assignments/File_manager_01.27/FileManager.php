
<?php 

$dir = './';

if(isset($_GET['dir'])) {
  $dir = $_GET['dir'];
}

if(isset($_POST['file_name']) AND $_POST['file_name'] != '') {
  file_put_contents($dir . '/' . $_POST['file_name'], $_POST['file_contents']);
}

$data = scandir($dir);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>File Manager</title>
</head>
<body>
  <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
          </tr>
        </thrad>
        <tbody>
          <?php foreach($data as $folder) { ?>
            <tr>
              <td><?= (is_dir($folder)) ? '<a href="?dir=' . $folder . '">' . $folder . '</a>' : $folder ?></td>
            </tr>
            <?php } ?>
        </tbody>
      </table>

      <h2>Create new file</h2>

      <from method="POST">
        <div class="mb-3">
          <label>File name</label>
          <input type="text" name="file_name" class="form-control"/>
        </div>
        <div class="mb-3">
          <label>File contents</label>
          <textarea name="file_contents" class="form-control"></textarea>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  
</body>
</html>
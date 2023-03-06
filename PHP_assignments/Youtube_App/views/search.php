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
  <title>Document</title>
</head>

<body>

  <div class="container mt-4">
    <div>
      <h2>Results</h2>
    </div>
    <ul>
      <?php foreach ($results as $result) : ?>
        <li>
          <div class="thumbnail mb-1 mt-3">
            <a href="<?= $result['video_url']; ?> ">
              <img class="thumbnail_img" src="<?= $result['thumbnail_url'] ?>" />
              <label><?= $result['name'] ?></label>
            </a>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

</body>

</html>
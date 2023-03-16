<div class="container">
  <div class="justify-content-center">
    <?php foreach ($video as $video) : ?>
      <div class="iframe d-flex mb-1 mt-3">
        <?= $video['iframe']; ?>
      </div>
      <div class="card-body d-flex">
        <span><?= $_SESSION['user_name']; ?></span>
        <span><?= $video['created_at']; ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div class="container">
  <div class="d-flex justify-content-center">
    <?php foreach ($video as $video) : ?>
      <div class="iframe d-flex mb-1 mt-3">
        <?= $video['iframe']; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
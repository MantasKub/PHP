<?php foreach ($video as $video) : ?>
  <div class="thumbnail mb-1 mt-3">
    <a href="<?= $video['video_url']; ?>">
      <img class="thumbnail_img" src="<?= $video['thumbnail_url']; ?>" />
    </a>
  </div>
<?php endforeach; ?>
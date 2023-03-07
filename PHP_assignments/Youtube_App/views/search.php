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
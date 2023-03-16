<main class="container form-signin w-100 m-auto text-center">
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal">Add your song</h1>
    <?php if (!empty($_GET['message'])) : ?>
      <div class="alert alert-<?= $_GET['status']; ?>"><?= $_GET['message'] ?></div>
    <?php endif; ?>

    <div class="form-floating mb-1">
      <input type="text" class="form-control" name="name" placeholder="Song name">
      <label>Song Name</label>
    </div>
    <div class="form-floating mb-1">
      <input type="text" class="form-control" name="video_url" placeholder="Video URL">
      <label>Video URL</label>
    </div>
    <div class="form-floating mb-1">
      <input type="text" class="form-control" name="iframe" placeholder="Iframe">
      <label>Iframe code</label>
    </div>
    <div class="form-floating mb-1">
      <input type="text" class="form-control" name="description" placeholder="Description">
      <label for="floatingDescription">Video description</label>
    </div>
    <div class="form-floating mb-3">
      <input class="form-control" type="file" name="thumbnail_url" id="formFile" placeholder="Cover">
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Add song</button>
  </form>
</main>
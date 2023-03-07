<div class="container">
  <div class="d-flex justify-content-center">
    <?php foreach ($video as $video) : ?>
      <div class="iframe d-flex mb-1 mt-3">
        <?= $video['iframe']; ?>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="comments d-flex justify-content-start ms-5">
    <div class="comments_form">
      <form>
        <h1 class="h3 mb-3 fw-normal text-center mt-3 text-white">Leave your Comment</h1>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" name="comment_name">
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-2">
          <textarea class="form-control" name="comment_name"></textarea>
          <label for="floatingTextarea">Comments</label>
        </div>
        <button class="w-100 btn btn-lg btn-warning" type="submit">Submit</button>
      </form>
    </div>
    <div class="comments_area"></div>
  </div>
</div>
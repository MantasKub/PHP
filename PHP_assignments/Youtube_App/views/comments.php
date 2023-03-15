<div class="comments d-flex justify-content-start ms-5">
  <div class="comments_form">
    <?php if (isset($_SESSION['user_id'])) : ?>
      <form method="POST">
        <h1 class="h3 mb-3 fw-normal text-center mt-3 text-white">Leave your Comment</h1>
        <h1 class="h3 mb-3 fw-normal text-center mt-3 text-white"><?= $_SESSION['user_name']; ?></h1>
        <div class="form-floating mb-2">
        </div>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" name="comment" />
          <label for="floatingTextarea">Comments</label>
        </div>
        <button class="w-100 btn btn-lg btn-warning" type="submit">Submit</button>
      </form>
    <?php else : ?>
      <form method="POST">
        <h1 class="h3 mb-3 fw-normal text-center mt-3 text-white">Leave your Comment</h1>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" name="com_name" />
          <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating mb-2">
          <input type="text" class="form-control" name="comment" />
          <label for="floatingTextarea">Comments</label>
        </div>
        <button class="w-100 btn btn-lg btn-warning" type="submit">Submit</button>
      </form>
    <?php endif; ?>
  </div>
  <div class="comments_area">
    <ul>
      <?php foreach ($comments as $comment) : ?>
        <li><?= $comment['comment']; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
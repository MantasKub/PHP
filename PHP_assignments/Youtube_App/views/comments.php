<div class="comments d-flex justify-content-start ms-5">
  <div class="comments_form">
    <form method="POST">
      <h1 class="h3 mb-3 fw-normal text-center mt-3 text-white">Leave your Comment</h1>
      <div class="form-floating mb-2">
        <input type="text" class="form-control" name="com_name" />
        <label for="floatingInput">Name</label>
      </div>
      <div class="form-floating mb-2">
        <form method="POST">
          <input class="form-control" name="comment" />
          <label for="floatingTextarea">Comments</label>
          <button class="w-100 btn btn-lg btn-warning" type="submit">Submit</button>
        </form>
      </div>
    </form>
  </div>
  <div class="comments_area">
    <ul>
      <?php foreach ($comments as $comment) : ?>
        <li>
          <?= $comment['com_name']; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
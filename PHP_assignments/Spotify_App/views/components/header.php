

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4" style="background-color: black">
  <div class="ms-2" style="width:130px">
  <a href="?page=first_page" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 ms-2 text-dark text-decoration-none">
    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" fill="currentColor" class="bi bi-play-circle-fill text-success" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
    </svg>
  </a>
  </div>
  <div class="text-success ms-5 ps-5">
    <div class="header-text fs-1">
      <h3 class="header-text fs-1 ms-5 ps-5">Your music player</h3>
    </div>
  </div>
  <div class="col-md-3 text-end me-2">
    <?php
    if(!empty($_SESSION) && $_SESSION['user'] != "") { ?>
        <a type="button" class="btn" href="?page=logout">Log-out</a> 
      <?php } else { ?>
        <a class="btn" name="log_out" href="?page=register">Sign-up</a>
      <?php } ?>
    
  </div>
  </header>
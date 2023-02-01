<?php

  $nav = [
    'Pagrindinis' => 'Mybank.php',
    'Kortelės' => '?page=cards',
    'Paskolos' => '?page=loans',
    'Pencija' => '?page=pension',
    'Internetinis bankas' => ' ?page=webBank'
  ];
?>

<div class="container">
    <header class="d-flex justify-content-center py-3">
        <h3 class="me-5">My Bank</h3>
      <ul class="nav nav-pills">
        <?php foreach($nav as $title => $link) : ?>
          <li><a href="<?=$link?>" class="nav-link"><?= $title ?></a></li>
          <?php endforeach; ?>
      </ul>
    </header>
  </div>
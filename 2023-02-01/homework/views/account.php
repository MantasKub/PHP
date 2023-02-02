

<?php
if(!isset($_SESSION['id'])) {
  header('Location: ?page=webBank');
} 
?>



<div class="container" style="width:200px">
  <p>Sąskaitos numeris: LT5515615616515615</p>
  <p>Vardas pavardė: Motiejus Aleksandravičius</p>
  <p>Sąskaitos likutis: 9.99 eur.</p>
</div>
<div class="container">
  <a  href="?page=logout" class="btn btn-primary">Log out</a>
</div>
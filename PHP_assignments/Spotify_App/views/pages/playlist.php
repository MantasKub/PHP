<?php

if(empty($_SESSION['user'])) {
  header('Location: ?page=login');
  exit;
}

if(empty($_GET['playlist_id'])) {
  header('Location: index.php');
  exit;
}

$result = $db->query("SELECT * FROM playlists WHERE id = {$_GET['playlist_id']}");
$playlist = $result->fetch_assoc();

// $result = $db->query()
?>

<h1>Songs in playlist "<?= $result['name']; ?>"</h1>
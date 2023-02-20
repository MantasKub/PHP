<?php
  if(empty($_SESSION['user'])) {
    header('Location: ?page=login');
    exit;
  }

  if(!empty($_POST)) {
      $db->query(
        vsprintf(
          "INSERT INTO playlists (name, user_id) VALUES ('%s', %d)",
          [$_POST['name'], $_SESSION['user']['id']]
        )
      );
  }

  $playlists = $db->query("SELECT * FROM playlists");
  $playlists = $playlists->fetch_all(MYSQLI_ASSOC);
?>

<h1>Discover songs</h1>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>User</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($playlists as $playlist) : ?>
      <tr>
        <td><?= $playlist['id']; ?></td>
        <td><?= $playlist['name']; ?></td>
        <td><?= $playlist['user_id']; ?></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>

<form method="POST">
  <h2>Create new playlist</h2>
  <div class="mb-3">
    <label>Playlist Name:</label>
    <input type="text" name="name" class="form-control" />
  </div>
  <button class="btn btn-primary">Create Playlist</button>
</form>
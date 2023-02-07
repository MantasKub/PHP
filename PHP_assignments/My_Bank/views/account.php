<?php
    if(!isset($_SESSION['user'])) {
        header('Location: index.php');
    }

    if($_SESSION['user']->role === '1') {
        header('Location: ?page=admin');
        exit;
    };

    $action = isset($_GET['action']) ? $_GET['action'] : '';
    $data = json_decode(file_get_contents('database.json'));
?>

<div class="d-flex align-items-center justify-content-between">
    <h1>Mano bankas</h1>
    <div>
        <a href="?page=account&action=new-transfer" class="btn btn-success">Naujas pavedimas</a>
        <a href="?page=logout" class="btn btn-danger">Atsijungti</a>
    </div>
</div>

<?php if($action === 'new-transfer') : ?>
        <form method="POST">
            <div class="mb-3">
                <label>Pavedimo gavėjas</label>
                <select name="recipient" class="form-control">
                    <?php foreach($data as $key => $account) : ?>
                        <option value="<?= $key ?>"><?= $account->name . '' . $account->last_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Pavedimo suma</label>
                <input type="number" name="amount" class="form-control" />
            </div>
        </form>

<?php endif; ?>
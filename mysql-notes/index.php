<?php

require_once './Connection.php';
require_once '../my-log.php';

try {
    $connection = new Connection();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$notes = $connection->getNotes();

// myLog($notes);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php require 'css/style.css'; ?>
    </style>
    <title>MySQL Notes</title>
</head>

<body>
    <h1>MySQL Notes</h1>
    <main>
        <form action="" method="post">
            <input type="text" name="title" id="title" placeholder="Note title">
            <textarea name="description" id="description" cols="30" rows="4" placeholder="Note description"></textarea>
            <button type="submit" class="new-note" title="Add new note">New note</button>
        </form>
        <div class="notes">

        <?php foreach($notes as $index => $note): ?>
            <div class="card">
                <div class="card-header">
                    <a href="#"><?= $note['title'] ?></a>
                    <button title="Close">X</button>
                </div>
                <div class="card-body">
                    <p><?= $note['description'] ?></p>
                </div>
                <div class="card-footer">
                    <small><?= $note['created_at'] ?></small>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </main>
</body>

</html>
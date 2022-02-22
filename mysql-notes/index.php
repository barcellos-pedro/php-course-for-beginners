<?php

require_once './Connection.php';
include_once '../my-log.php';

try {
    $connection = Connection::getConnection();
} catch (PDOException $e) {
    echo 'ERROR while connecting to the databse: ' . $e->getMessage();
}

$notes = $connection->getNotes();

// myLog($notes);

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => '',
    'created_at' => ''
];

// If we GET this page with the queryParm 'id'
if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $currentNote = $connection->getNoteById($id);
    // myLog($note);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php require_once 'css/style.css'; ?>
    </style>
    <title>MySQL Notes</title>
</head>

<body>
    <a href="index.php" style="text-decoration: none; color: var(--jet)">
        <h1>MySQL Notes</h1>
    </a>
    <main>
        <form action="save-note.php" method="post">
            <?php if($currentNote['id']) : ?>
                <input type="hidden" name="id" value="<?= $currentNote['id'] ?>">
            <?php endif; ?>
            <input type="text" name="title" id="title" placeholder="Note title" value="<?= $currentNote['title'] ?>">
            <textarea name="description" id="description" cols="30" rows="4" placeholder="Note description"><?= $currentNote['description'] ?></textarea>
            <button type="submit" class="new-note">
                <!-- Shorter way -->
                <!-- $currentNote['title'] === '' ? 'New note' : 'Update note' -->
                <?php if($currentNote['title'] === '') : ?>
                    New note
                <?php else: ?>
                    Update note
                <?php endif; ?>
            </button>
        </form>
        <div class="notes">
            <?php if(count($notes) > 0) : ?>
                <?php foreach ($notes as $note) : ?>
                    <div class="card">
                        <div class="card-header">
                            <a href="?id=<?= $note['id'] ?>" title="Edit note"><?= $note['title'] ?></a>
                            <form action="delete-note.php" method="post" style="display: inline-block;">
                                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                                <button type="submit" title="Delete note">
                                    <img src="./images/trash-icon.png" alt="Trash can icon">
                                </button>
                            </form>
                        </div>
                        <div class="card-body">
                            <p><?= $note['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <small><?= $note['created_at'] ?></small>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h2>There is no notes 😞</h2>
            <?php endif; ?>
            
        </div>
    </main>
</body>

</html>
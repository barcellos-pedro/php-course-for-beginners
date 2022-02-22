<?php

require_once './Connection.php';
require_once './Note.php';
include_once '../my-log.php';
include_once '../get-post-data.php';

// myLog($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $title = get_post_data('title');
    $description = get_post_data('description');

    if (!$title || !$description) {
        echo '<h2>The note is missing some field. Please, try again.</h2>';
        echo "<a href='index.php'>Go back</a>";
        return;
    }

    try {
        $connection = Connection::getConnection();
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    $note = new Note($title, $description);

    $connection->saveNote($note);

    header('Location: index.php');
}

/**
 * If we try to access through url,
 * and since there is no field being sent, redirect right away
 */
else if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
    header('Location: index.php');
}

?>
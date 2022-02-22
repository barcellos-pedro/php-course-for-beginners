<?php

require_once './Connection.php';
require_once './Note.php';
include_once '../my-log.php';
include_once '../get-post-data.php';

myLog($_POST);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = (int)get_post_data('id');
    $title = get_post_data('title');
    $description = get_post_data('description');

    if (!$title || !$description) {
        echo '<h2>The note is missing some field. Please, try again.</h2>';
        echo "<a href='index.php'>Go back</a>";
        return;
    }

    try {
        $connection = Connection::getConnection();
    } catch (PDOException $error) {
        echo 'ERROR: ' . $error->getMessage();
    }

    // Update note based on the 'id'
    if ($id) {
        $connection->updateNote($id, $title, $description);
    } else {
        // Create if there is no 'id' to update
        $connection->saveNote(new Note($title, $description));
    }

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
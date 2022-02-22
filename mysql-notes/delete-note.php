<?php

require_once './Connection.php';
include_once '../my-log.php';
require_once '../get-post-data.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $id = (int)get_post_data('id');
    
    // myLog($id);

    try {
        $connection = Connection::getConnection();
    } catch (PDOException $error) {
        echo 'ERROR: ' . $error->getMessage();
    }

    $connection->deleteNote($id);

    header('Location: index.php');
}

else if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
    header('Location: index.php');
}

?>
<?php

include '../my-log.php';
require './todo-helper.php';

myLog($_POST);

$todos = getTodos();

$todoKey = $_POST['todo_name'];
$todoToUpdate = $todos[$todoKey];

myLog($todoToUpdate);

if ($todoToUpdate && in_array($todoToUpdate, $todos)) {
    $todoStatus = $todoToUpdate['completed'];

    // Here we toggle the 'completed' status
    $todoStatus = !$todoStatus;

    // Save to current task
    $todoToUpdate['completed'] = $todoStatus;

    // Save to todos array
    $todos[$todoKey] = $todoToUpdate;

    saveTodos($todos);

    header('Location: index.php');
} else {
    echo '<h2>Server error, we could not update your task. Try again later.</h2>';
    echo "<a href='index.php'>Go back</a>";
}

?>
<?php

require './todo-helper.php';
require '../my-log.php';

myLog($_POST);

$todos = getTodos();

$todoKey = $_POST['todo_name'];
$todoToDelete = $todos[$todoKey];

if ($todoToDelete && in_array($todoToDelete, $todos)) {
    // Returns the index of the todoKey in the array
    $indexToDelete = array_search($todoKey, array_keys($todos));

    // Removes 1 todo
    array_splice($todos, $indexToDelete, 1);
    
    saveTodos($todos);

    header('Location: index.php');
} else {
    echo '<h2>Server error, we could not delete your task. Try again later.</h2>';
    echo "<a href='index.php'>Go back</a>";
}

?>
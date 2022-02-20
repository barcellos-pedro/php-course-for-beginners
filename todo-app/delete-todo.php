<?php

require '../my-log.php';

myLog($_POST);

$fileName = 'todos.json';
$fileContent = file_get_contents($fileName);
$todos = json_decode($fileContent, true);

$todoKey = $_POST['todo_name'];
$todoToDelete = $todos[$todoKey];

if ($todoToDelete && in_array($todoToDelete, $todos)) {
    // Returns the index of the todoKey in the array
    $indexToDelete = array_search($todoKey, array_keys($todos));

    // Removes 1 todo
    array_splice($todos, $indexToDelete, 1);
    
    $todosJson = json_encode($todos, JSON_PRETTY_PRINT);
    file_put_contents($fileName, $todosJson);

    header('Location: index.php');
} else {
    echo '<h2>Server error, we could not delete your task. Try again later.</h2>';
    echo "<a href='index.php'>Go back</a>";
}

?>
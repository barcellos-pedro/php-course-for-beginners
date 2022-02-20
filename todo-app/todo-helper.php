<?php

function getTodos($fileName = 'todos.json') {
    // Get todos.json file
    $fileContent = file_get_contents($fileName);
    
    // Converts json file to associative array
    $todos = json_decode($fileContent, true);

    return $todos;
}

function saveTodos($todos, $fileName = 'todos.json') {
    // Converts associative array to json file
    $todosJson = json_encode($todos, JSON_PRETTY_PRINT);

    // Save updated todos into the file
    file_put_contents($fileName, $todosJson);
}

?>
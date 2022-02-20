<?php

include '../my-log.php';
require './todo-helper.php';

// Get new todo
$newTodo = $_POST['todo_name'] ?? false;
$newTodo = trim($newTodo);

// myLog($newTodo);

if ($newTodo) {
    // Initialize variables
    $fileName = 'todos.json';
    $todos = [];
    $todosCount = 1;
    $newTodoKey = "todo-$todosCount";
    
    // If file exists, get content from it
    if (file_exists($fileName)) {
        $todos = getTodos();
    
        // Todo list count
        $todosCount = count($todos);
        $todosCount++;
    
        // New todo key
        $newTodoKey = "todo-$todosCount";
    }

    $todos[$newTodoKey] = [
        'completed' => false,
        'task' => $newTodo
    ];

    saveTodos($todos);

    // Redirect to home
    header('Location: index.php');
} else {
    echo '<h2>Please provide a valid task</h2>';
    echo "<a href='index.php'>Go back</a>";
}

?>
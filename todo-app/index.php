<?php

include '../my-log.php';
require './todo-helper.php';

$fileName = 'todos.json';
$todos = [];

if (file_exists($fileName)) {
    $todos = getTodos();
}

// myLog($todos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <h1>Todo App</h1>
    <form action="add-todo.php" method="post" style="margin-bottom: 1em;">
        <input type="text" name="todo_name" placeholder="Enter a task">
        <button type="submit">New Todo</button>
    </form>
    <div class="todo">
        <?php foreach($todos as $key => $todo): ?>
            <div class="todo-item" style="margin: 1em 0;">
                <p style="<?= $todo['completed'] ? 'text-decoration: line-through' : 'none' ?>">
                    <?= $todo['task'] ?>
                </p>
                <div class="actions" style="display: flex; align-items: baseline; gap: 1em; margin-top: 8px;">
                    <form action="update-todo.php" method="post">
                        <button type="submit">
                            <input type="hidden" name="todo_name" value="<?= $key ?>">
                            <?= $todo['completed'] ? 'Undo' : 'Mark as completed' ?>
                        </button>
                    </form>
                    <form action="delete-todo.php" method="post" style="display: inline-block;">
                        <input type="hidden" name="todo_name" value="<?= $key ?>">
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
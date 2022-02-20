<?php require_once 'operations.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include/Require Functions</title>
</head>

<body>
    <h1>Include/Require Functions</h1>
    <?php
        $add_result = operations(2, 3, 'add');
        $subtract_result = operations(3, 2, 'subtract');
        $multiply_result = operations(2, 2, 'multiply');
        $divide_result = operations(10, 5, 'divide');

        echo "Add: $add_result <br>";
        echo "Subtract: $subtract_result <br>";
        echo "Multiply: $multiply_result <br>";
        echo "Divide: $divide_result <br>";
    ?>
</body>

</html>
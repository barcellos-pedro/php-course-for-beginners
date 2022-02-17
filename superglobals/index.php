<?php

echo '$_GET <br>';
echo '<pre>';
var_dump($_GET); // return an associative array
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Superglobals</h1>
    <form action="" method="get">
        <input type="text" name="keyword" placeholder="Type and hit enter">
        <Button type="submit">Search</Button>
        <?php
            $keyword = $_GET['keyword'];
            if (strlen(trim($keyword)) !== 0)
            {
                echo "<p>Search keyword: $keyword</p>";
            } else {
                echo "<p>Search keyword: Empty or white spaces</p>";
            }
        ?>
    </form>
</body>
</html>
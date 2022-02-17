<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Registration Form & validation</title>
</head>

<body>
    <main class="container">
        <h1 class="mt-3">CV Registration</h1>
        <form action="" method="post" novalidate class="d-flex gap-4 flex-column">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" id="username" name="username">
                        <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="repeatPassword">Repeat Password</label>
                        <input class="form-control" type="password" id="repeatPassword" name="repeatPassword">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="cvLink">Your CV link</label>
                        <input class="form-control" type="text" id="cvLink" name="cvLink" placeholder="https://www.example.com/my-cv.pdf">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
        <hr>
        <p>$_POST Data</p>
        <?php
        /**
         * $_POST - Returns an associative array
         * Each input name will be an key in the array
         */
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        ?>
    </main>
</body>

</html>
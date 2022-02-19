<?php

$errors = [];

$username = '';
$email = '';
$password = '';
$repeatPassword = '';
$cvLink = '';

// Define global variable
define('REQUIRED_FIELD_ERROR', ' is required');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = get_post_data('username');
    $email = get_post_data('email');
    $password = get_post_data('password');
    $repeatPassword = get_post_data('repeatPassword');
    $cvLink = get_post_data('cvLink');

    echo '<pre>';
    echo 'Fields<br>';
    echo var_dump($username, $email, $password, $repeatPassword, $cvLink);
    echo '</pre>';

    // username validation
    if (!$username)
    {
        $errors['username'] = 'Username' . REQUIRED_FIELD_ERROR;
    }
    elseif (strlen($username) < 6 || strlen($username) > 16)
    {
        $errors['username'] = 'Username must be between 6 and 16 characters';
    }

    // email validation
    if (!$email)
    {
        $errors['email'] = 'E-mail' . REQUIRED_FIELD_ERROR;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = 'Must be a valid e-mail address';
    }

    // password validation
    if (!$password)
    {
        $errors['password'] = 'Password' . REQUIRED_FIELD_ERROR;
    }

    if (!$repeatPassword)
    {
        $errors['repeatPassword'] = 'Password confirmation' . REQUIRED_FIELD_ERROR;
    }

    if ($repeatPassword !== $password)
    {
        $errors['repeatPassword'] = 'Repeat Password must match Password';
    }

    // cv link validation
    if ($cvLink && !filter_var($cvLink, FILTER_VALIDATE_URL))
    {
        $errors['cvLink'] = 'Please provide a valid link';
    }

    if (empty($errors))
    {
        echo '<h3 class="text-center">Form submitted!</h3>';
    }
    
}

/**
 * Secure the string removing any script injection into the field value
 */
function get_post_data($field)
{
    // if (!isset($_POST[$field])) {
    //     $_POST[$field] = '';
    // }

    // short syntax
    $_POST[$field] ??= '';

    return htmlspecialchars(stripslashes($_POST[$field]));
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
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
                        <input
                            class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : '' ?>"
                            type="text"
                            id="username"
                            name="username"
                            value=<?php echo $username ?>>
                        <small class="form-text text-muted">Min: 6 and max 16 characters</small>
                        <div class="invalid-feedback"><?php echo $errors['username'] ?? '' ?></div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input
                            class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : '' ?>"
                            type="email"
                            id="email"
                            name="email"
                            value=<?php echo $email ?>>
                        <div class="invalid-feedback"><?php echo $errors['email'] ?? '' ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input
                            class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : '' ?>"
                            type="password"
                            id="password"
                            name="password"
                            value=<?php echo $password ?>>
                        <div class="invalid-feedback"><?php echo $errors['password'] ?? '' ?></div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="repeatPassword">Repeat Password</label>
                        <input
                            class="form-control <?php echo isset($errors['repeatPassword']) ? 'is-invalid' : '' ?>"
                            type="password"
                            id="repeatPassword"
                            name="repeatPassword"
                            value=<?php echo $repeatPassword ?>>
                        <div class="invalid-feedback"><?php echo $errors['repeatPassword'] ?? '' ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="cvLink">Your CV link</label>
                        <input
                            class="form-control <?php echo isset($errors['cvLink']) ? 'is-invalid' : '' ?>"
                            type="text"
                            id="cvLink"
                            name="cvLink"
                            placeholder="https://www.example.com/my-cv.pdf"
                            value=<?php echo $cvLink ?>>
                        <div class="invalid-feedback"><?php echo $errors['cvLink'] ?? '' ?></div>
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
        <div class="row">
            <div class="col">
                <?php
                /**
                 * $_POST - Returns an associative array
                 * Each input name will be an key in the array
                 */
                echo '<pre>';
                var_dump($_POST);
                echo '</pre>';
                ?>
            </div>
            <div class="col">
                <p>Alternative syntax</p>
                <?php foreach($errors as $error): ?>
                    <p><?= $error; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>
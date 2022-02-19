<?php
/**
 * Cookies is used for mainly 3 reasons
 * - Session management, storing session id
 * - Personalization, sugestions based on the user navigation even if they are not logged in. E.g: Last viewed product
 * - Tracking - Google analytics
 * 
 * It can hold up to 4 kb
 * Should not store sensitive data (better use session)
 */

 // Name, Value, expiration, path to save the current cookie, etc...
 setcookie('mycookie', 'TheCodeholic', strtotime('+1 day'), '/');

 // When the expiration time comes, the cookie will be cleared

 echo '<pre>';
 echo var_dump($_COOKIE);
 echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>
</body>
</html>
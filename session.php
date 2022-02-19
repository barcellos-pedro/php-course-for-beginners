<?php 
/**
 * Cookies store info in the browser
 * Session store info in the server and creates uniques session-id
 * and writes that session-id in the cookie
 * like name = PHPSESSID | value = doh3503pugh8oukol2qho54la4
 */

 // We need to initialize before the html
 session_start();

 // Page counter
//  if (isset($_SESSION['counter'])) {
//     $_SESSION['counter']++;
//  } else {
//     $_SESSION['counter'] = 1;
//  }

 // Short syntax
 $_SESSION['page_views'] ??= 0;
 $_SESSION['page_views']++;

 echo '<pre>';
 var_dump($_SESSION);
 echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Sessions</h1>
    <p>You have visited this page: <?php echo $_SESSION['page_views'] ?> times</p>
</body>
</html>
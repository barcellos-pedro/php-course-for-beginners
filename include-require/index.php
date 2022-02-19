<?php
// include -> if the file is not found, the rest of the code will execute
// require -> if the file is not found, and error will be thrown

/**
 * include_once/require_once
 * Once the file is required/included
 * if we require/include the same file again
 * it will not be required/include
 */

include('partials/header.php');
?>

<?php $year = date('Y'); ?>

<h1>Include & Require</h1>

<?php include('partials/footer.php') ?>
<?php

/**
 * Secure the string removing any script injection into the field value
 */
function get_post_data($field)
{
    $_POST[$field] ??= '';

    return htmlspecialchars(stripslashes($_POST[$field]));
}

?>
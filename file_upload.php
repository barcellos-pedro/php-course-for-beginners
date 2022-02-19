<?php

$assets_folder = __DIR__ . '/assets';
$error_message = '';

echo '<pre>';
echo '<h2>File info</h2>';
var_dump($_FILES);
echo '</pre>';

// Check if file was uploaded
// To submit larger files like videos, we need to change post_max_size and upload_max_filesize in php.ini
if (isset($_FILES['file']))
{
    $file = $_FILES['file'];

    // uploaded file temporary location
    $upload_tmp_location = $file['tmp_name'];

    // file name in lower case and replace white spaces
    $file_name = strtolower(str_ireplace(" ", "-", $file['name']));

    // file extension
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    // save file into -> {projectdir}/assets/{file_name}
    $move_target = "$assets_folder/$file_name";

    echo '<pre>';
    var_dump($upload_tmp_location, $file_name, $move_target, $extension);
    echo '</pre>';

    // Validations

    // Check if file size is more than 5MB
    // file size is in kb
    if ($file['size'] > 5 * 1024 * 1024)
    {
        $error_message = 'You cannot upload more than 5MB files';
        echo "<p style='color: red;'>$error_message</p>";
        return;
    }

    // Check if file extension
    elseif (!in_array($extension, ['png', 'jpeg', 'svg', 'jpg']))
    {
        $error_message = 'You can only update images';
        echo "<p style='color: red;'>$error_message</p>";
        return;
    }

    // Save file to assets folder
    move_uploaded_file($upload_tmp_location, $move_target);

    echo "<p style='color: green;'>File $file_name was uploaded!</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <main>
        <h1>Upload File</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" style="margin: 1em 0;">
            <br>
            <button type="submit">Send</button>
        </form>
    </main>
</body>
</html>
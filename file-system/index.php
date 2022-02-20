<?php

// Magic constants

// Current directory path
echo __DIR__ . '<br>';

// Current File path
echo __FILE__ . '<br>';

// Create directory
mkdir('test-folder');

// Rename directory
rename('test-folder', 'renamed-test-folder');

// Delete directory
rmdir('renamed-test-folder');

// Read files and folders from directory
$files = scandir('./');

echo '<pre>';
echo 'Files <br>';
var_dump($files);
echo '</pre>';

foreach ($files as $index => $file)
{
    if ($file == '.' || $file == '..') continue;
    $index++;
    echo "File $index: $file <br>";
}

echo '<br>';

// Get content from file
$lorem_file_content = file_get_contents('lorem.txt');
echo "Lorem txt:<br> $lorem_file_content <br><br>";

// Write on file or create if it does not exists
file_put_contents('hello-world.txt', 'Hello world!');

$hello_file_content = file_get_contents('hello-world.txt');
echo "Hello world txt: $hello_file_content <br><br>";

// Prepend some text to a file
file_put_contents(
    'lorem.txt',
    '[New text before lorem ipsum]' . PHP_EOL . $lorem_file_content
);

echo "Prepend text on lorem txt:<br> $lorem_file_content <br><br>";

/**
 * Some other frequent functions
 * file_exists
 * is_dir
 * filemtime - last modification
 * filesize - file size
 * diskfreespace
 * file - reads entire file into array
 * 
 * https://www.php.net/manual/en/book.filesystem.php
 */

?>
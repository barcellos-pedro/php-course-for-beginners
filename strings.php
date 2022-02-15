<?php
// Create simple string
$name = 'TheCodeholic';

$hello = 'Hello TheCodeholic';
$hello2 = 'Hello TheCodeholic';
$hello3 = 'Hello ' . $name;

$helloSimpleQuote = 'Hello $name';
$helloDoubleQuote =  "Hello $name";

echo $hello . '<br>';
echo $hello2 . '<br>';
echo $hello3 . '<br>';
echo $helloSimpleQuote . '<br>';
echo $helloDoubleQuote . '<br>';

// String Concatenation
echo "Hello" . "World" . '<br>';

// String functions
$string = "      Hello World      ";

// PHP_EOL
// newline character in a cross-platform-compatible way

echo "- " . strlen($string) . '<br>' . PHP_EOL;
echo "- " . trim($string) . '<br>' . PHP_EOL;
echo "- " . ltrim($string) . '<br>' . PHP_EOL;
echo "- " . rtrim($string) . '<br>' . PHP_EOL;
echo "- " . str_word_count($string) . '<br>' . PHP_EOL;
echo "- " . strrev($string) . '<br>' . PHP_EOL;
echo "- " . strtoupper($string) . '<br>' . PHP_EOL;
echo "- " . strtolower($string) . '<br>' . PHP_EOL;
echo "- " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "- " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "- " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "- " . strpos($string, 'world') . '<br>' . PHP_EOL; // case sensitive function
echo "- " . stripos($string, 'world') . '<br>' . PHP_EOL; // 'i' to ignore case
echo "- " . substr($string, 8) . '<br>' . PHP_EOL;
echo "- " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL; // case sensitive
echo "- " . str_ireplace('World', 'PHP', $string) . '<br>' . PHP_EOL; // 'i' to ignore case

$pedroName = "001pedro002barcellos";
echo substr($pedroName, stripos($pedroName, 'pedro'), strlen('pedro')) . '<br>';

$number1 = 100;
$number2 = 123456;

// show numbers with the same length with 0 as prefix
echo str_pad($number1, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_pad($number2, 8, '0', STR_PAD_LEFT) . '<br>';

// Repeat the world x times
echo str_repeat(' World', 3) . '<br>';

// Multiline text and line breaks
$longText = "
    Hello, my name is Pedro
    I am 24,
    I love my cats
 ";

echo $longText . '<br>';

// Break line on every '\n'
echo nl2br($longText) . "<br>";

// Multiline text and reserve html tags
$longText2 = "
    Hello, my name is <b>Pedro</b>
    I am <b>24</b>,
    I love my cats
 ";

echo $longText2 . "<br>";
echo nl2br($longText2) . "<br>";
echo htmlentities($longText2) . "<br>" . PHP_EOL;
echo nl2br(htmlentities($longText2)) . "<br>" . PHP_EOL;
echo html_entity_decode(htmlentities($longText2)) . "<br>" . PHP_EOL; // output parsed html tags
echo htmlspecialchars($longText2) . "<br>" . PHP_EOL; // just like htmlentities()

 // https://www.php.net/manual/en/ref.strings.php

<?php

// Print current timestamp
echo 'Current timestamp: ' . time() . '<br>';

// Print current date
// we can pass an 2nd arg, the timestamp: time() or strtotime()
echo 'Current date: ' . date('d-m-Y H:i:s') . '<br>';

// Print yesterday
echo 'Yesterday: ' . date('D-M-Y H:i', time() - (60 * 60 *24)) . '<br>';

// Different format
// https://www.php.net/manual/en/function.date.php
echo 'Different format: ' . date('F j Y, H:i') . '<br>';

echo '<br>';

// String to timestamp
echo 'String to timestamp now: ' . strtotime('now') . '<br>';
// echo 'String to timestamp +1 day: ' . strtotime('+1 day') . '<br>';
// echo 'String to timestamp +1 week: ' . strtotime('+1 week') . '<br>';
// echo 'String to timestamp +1 year: ' . strtotime('+1 year') . '<br>';

echo 'String to timestamp with date (now): ' . date('F j Y, H:i', strtotime('now')) . '<br>';
echo 'String to timestamp with date (+1 day): ' . date('F j Y, H:i', strtotime('+1 day')) . '<br>';
echo 'String to timestamp with date (+1 week): ' . date('F j Y, H:i', strtotime('+1 week')) . '<br>';
echo 'String to timestamp with date (-1 year): ' . date('F j Y, H:i', strtotime('-1 year')) . '<br>';
echo 'String to timestamp with date (+1 year): ' . date('F j Y, H:i', strtotime('+1 year')) . '<br>';

function getMyDate(string $format = 'F j Y, H:i', string $time) : string
{
    return date($format, strtotime($time));
}

echo '<br> Date with myDate(): ' . getMyDate(time: 'now') . '<br>';

// Parse date
// https://www.php.net/manual/en/function.date-parse.php
$dateString = '2022-02-16 20:46:35'; // declare date
$parsedDate = date_parse($dateString); // parsed date, returns an associative array

echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

echo 'Day: ' . $parsedDate['day'] . '<br>';
echo 'Month: ' . $parsedDate['month'] . '<br>';
echo 'Year: ' . $parsedDate['year'] . '<br>';

echo '<br>';

// Parse date with the desired format
// https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 16 2022 21:19:00';
$parsedDate = date_parse_from_format('F j Y H:i', $dateString);

echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

$dateValues = [$parsedDate['day'], $parsedDate['month'], $parsedDate['year']];
echo "Date: " . implode('-', $dateValues);

?>
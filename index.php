<?php

// PHP Basics

// single comment

# single comment

/**
 * multline
 * comments
 */

/**
 * Variables types
 * - String
 * - Integer
 * - Float
 * - Boolean
 * - Null
 * - Array
 * - Object
 * - Resource
 */

 // Variables dot not have types, the values hold the type
 $name = 'pedro';
 $age = 24;
 $isAlive = true;
 $height = 1.75;
 $salary = null;

 echo($name . '<br>');
 echo($age . '<br>');
 echo($isAlive . '<br>');
 echo($height . '<br>');
 echo($salary . '<br>');

 echo(gettype($name) . '<br>');
 echo(gettype($age) . '<br>');
 echo(gettype($isAlive) . '<br>');
 echo(gettype($height) . '<br>');
 echo(gettype($salary) . '<br>');

 // print information about variable
 var_dump($name);
 var_dump($age, $isAlive);

 echo '<br>';

 // Checking functions, starts with 'is'
 var_dump(is_string($name));
 var_dump(is_string($age));

 echo '<br>';

 // Check if variable is defined
 var_dump(isset($address));
 var_dump(isset($name));
 var_dump(isset($salary));

 echo '<br>';

 // Constants
 // For constants we do not use '$'
 define('PI', 3.14);
 echo PI;

 // defined() check if constant is defined
 var_dump(defined('PI'));

 echo '<br>';

 // PHP has a lot of built-in constants
 echo PHP_INT_MAX;

 echo '<br>';

 // Clears variable from memory
 unset($name); // $name = null

 echo 'Name: ' . $name . '<br>';
 echo var_dump($name);
 
?>
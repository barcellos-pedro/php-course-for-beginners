<?php

 // if condition
 $age = 99;
 $salary = 1000;

 if ($age < 18) {
    echo "You are an minor";
 } else {
    echo "You are an adult";
 }

 echo '<br>';

 // IF conditional AND conditional
 if ($age > 18 && $salary >= 1000) {
     echo 'You will survive';
 }

 // IF conditional OR conditional
 if ($age < 18 || $salary < 500) {
    echo 'You will not survive';
 }

 echo '<br>';

 // IF conditional + more conditions with elseif
 if ($age < 22) {
     echo 'So young';
 } elseif ($age < 30) {
     echo 'Kinda young but not old yet';
 } elseif ($age > 60 && $salary > 10000) {
     echo 'You are old but rich';
 } else {
     echo 'You are just some regular person';
 }

 echo '<br>';

// Ternary if
echo '# Ternary if <br>';
echo $age < 18 ? 'Young' : 'Old';
echo '<br>';
echo $age > 18 ? 'Adult' : ($age < 60 ? 'Adult but not old' : 'Just old');

echo '<br>';

// Null coalescing operator
echo '# Null coalescing operator <br>';
echo $name ?: 'There is no name <br>';
// OR
echo $name ?? 'There is no name again';

echo '<br>';

// Null coalescing assignment operator
$person = [
    'name' => 'Pedro'
];

// Normal way
if (!isset($person['alive'])) {
    $person['alive'] = 'Not alive';
}
// OR we can use the operator
$person['alive'] ??= 'Not alive';

echo $person['alive'] . '<br>';

// switch statments
$userRole = 'admin';

switch ($userRole) {
    case 'admin':
        echo 'You are admin';
        break;
    case 'editor':
        echo 'You are editor';
        break;
    default:
        echo 'Unknown role';
}

echo '<br>';

// Match

/**
 * Since php 8.0 we can also use match
 * Unlike switch, the comparison is an identity check (===)
 * rather than a weak equality check (==). 
 */
$userRole = 'devops';

$result = match($userRole) {
    'admin' => 'You are admin',
    'editor' => 'You are editor',
    'developer', 'devops' => 'You are engineer',
    default => 'Unknown role'
};

 echo "Match result -> $result";

?>
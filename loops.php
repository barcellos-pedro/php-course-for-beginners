<?php

$number = 10;

// while
echo 'While';
echo '<br>';

while($number >= 0) {
    echo "Number value $number <br>";
    if($number == 7) {
        break;
    }
    $number--;
};

echo '<br>';

// do while
// first do the implementation and then checks
echo 'Do while';
echo '<br>';

$number = 10;

do {
    echo "Number value $number <br>";
    $number--;
} while($number >= 5);

echo '<br>';

// for
for($i = 0; $i <= 3; $i++) {
    echo "i value -> $i <br>";
}

echo '<br>';

// foreach
echo 'Foreach';
echo '<br>';

$names = ['Pedro', 'Ana', 'Jimin', 'Amora'];
$numbers = [1, 2, 3];

foreach($names as $index => $name)
{
    echo "Index: $index | Name: $name <br>";
}

echo '<br>';

// we can omit the $index variable
// and assign any name to it
foreach($numbers as $number)
{
    echo "Number: $number <br>";
}

echo "<br>";

// with associative arrays
$person = [
    'name' => 'Pedro',
    'age' => 24,
    'alive' => true,
    'hobbies' => ['music', 'games']
];

foreach($person as $key => $value)
{
    if ($key === 'hobbies') {
        $hobbies = implode(", ", $value);
        echo "Hobbies: $hobbies <br>";
    } elseif ($key === 'alive') {
        $isAlive = $value ? 'Yes' : 'No';
        echo "Is alive: $isAlive <br>";
    } else {
        // maker uppercase
        $key = ucfirst($key);
        echo "$key: $value <br>";
    }
}

?>
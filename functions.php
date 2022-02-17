<?php

 function getAge($bithYear, $currentYear)
 {
     return $currentYear - $bithYear;
 }

 // Typed function
 function getAge2(int $bithYear, int $currentYear) : int
 {
     return $currentYear - $bithYear;
 }

 echo "Some age: " . getAge(1997, 2022);

 echo "<br>";

 // Function wich prints "Hello I am Pedro"

 function hello(string | null $name) : string
 {
     if (!isset($name)) {
        return "Hello world <br>";
     }
     return "Hello $name <br>";
 }

 $name;
 echo hello($name);
 echo hello('Pedro');

 // Sum function
 function sum($a, $b)
 {
     return $a + $b;
 }

 echo "Sum " . sum(2, 3) . "<br>";

 // Create function to sum all numbers using spread operator
 function sumNumbers(...$numbers)
 {
    return array_reduce($numbers, fn($acc, $next) => $acc + $next, 0);
 }

 function joinString(...$string)
 {
    return array_reduce($string, fn($acc, $next) => $acc . $next, '');
 }

 $sumResult = sumNumbers(1, 2, 3);
 echo "Sum of numbers $sumResult <br>";

 echo "Join function: " . joinString('P', 'e', 'd', 'r', 'o');

?>
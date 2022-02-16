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

?>
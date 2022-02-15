<?php

 // Declaring numbers
 $a = 5;
 $b = 4;
 $c = 1.2;

 // Arithmetic operations
 echo $a + $b . '<br>';
 echo $a - $b . '<br>';
 echo $a % $b . '<br>';
 echo ($a * $b) / $c . '<br>';

 // Assignment with math operators
 $a += $b; echo $a.'<br>'; // $a = 9
 $a -= $b; echo $a.'<br>'; // $a = 1
 $a *= $b; echo $a.'<br>'; // $a = 20

 // Increment operator
 echo $a++ . '<br>';
 echo ++$a . '<br>';

 // Decrement operator
 echo $a--;
 echo --$a;

 echo '<br>';

 // Number checking functions
 var_dump(is_float($c));
 echo '<br>';
 var_dump(is_float($b));
 echo '<br>';
 var_dump(is_integer($a));
 echo '<br>';
 var_dump(is_numeric(4));
 echo '<br>';
 
 // Conversion (casting)
 $strNumber = '12.34';
 $number = (float)$strNumber;
 var_dump($number);
 
 echo '<br>';
 
 $emptyStr = '';
 $result = (bool)$emptyStr;
 var_dump($result);

 echo '<br>';

 // Converts the same way
 // floatval();
 // intval();

 // Number functions
 echo "abs(-15) = " . abs(-15) . "<br>";
 echo "pow(2, 3) = " . pow(2, 3) . "<br>";
 echo "max(2, 3) = " . max(2, 3) . "<br>";
 echo "min(2, 3) = " . min(2, 3) . "<br>";
 echo "round(2.6) = " . round(2.6) . "<br>";
 echo "floor(2.4) = " . floor(2.4) . "<br>";
 echo "ceil(2.4) = " . ceil(2.4) . "<br>";

 // Formatting numbers
 $teste = 123456789.12345;
 echo number_format($number, 2, '.', ',');

 // https://www.php.net/manual/en/ref.math.php

?>
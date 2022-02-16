<?php
 // Create array
 $fruits = ["Banana", "Apple", "Orange"];

 // Store any data type
 $testing = ["Test", 24, 1.55, ["hello", "world"]];

 // Old way
 // $fruits = array("Banana", "Apple", "Orange");

 // Print the whole array
 echo var_dump($fruits);
 
 // Workaround to show formatted
 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Get element by index
 echo "$fruits[0] <br>";

 // Set element by index
 $fruits[0] = "Manga";
 
 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Check if array has element at index 2
 echo '<pre>';
 echo var_dump(isset($fruits));
 echo var_dump(isset($fruits[3]));
 echo '</pre>';

 // Append element
 $fruits[] = "Peach";

 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Print the length of the array
 echo "Fruits lentgh => " . count($fruits) . "<br>";

 // Add element at the end of the array
 array_push($fruits, "Blueberry");

 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Removes the last element from the end of the array
 array_pop($fruits);

 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Add element at the beginning of the array
 array_unshift($fruits, "Pera");

 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Removes the first element of the array
 array_shift($fruits);

 echo '<pre>';
 var_dump($fruits);
 echo '</pre>';

 // Split string into an array
 $string = "Pedro, Ana, Paula";

 echo '<pre>';
 var_dump(explode(",", $string));
 echo '</pre>';

 // Combine array elements into an string
 echo implode(' & ', $fruits) . "<br>";

 // Cleaner way to print array
 print_r($fruits) . "<br>";

 // Check if element exists in array
 echo var_dump(
     in_array("Apple", $fruits)
 ) . "<br>";

 // Search element index in array
 echo "Apple index in array => " . array_search("Orange", $fruits) . "<br>";

 // Merge two arrays
 $arr1 = ["a", "b"];
 $arr2 = ["c", "d"];

 echo '<pre>';
 echo var_dump(array_merge($arr1, $arr2));
 // Using spread operator
 echo var_dump([...$arr1, ...$arr2]);
 echo '</pre>';

 // Sort of array
 echo '<pre>';
 echo "Sort \n";
 sort($fruits);
 var_dump($fruits);
 echo '</pre>';

 echo '<pre>';
 echo "Reversed \n";
 rsort($fruits);
 var_dump($fruits);
 echo '</pre>';

 // Filter, map, reduce
 $numbers = [1, 2, 3, 4, 5];

 $evens = array_filter($numbers, function($number) {
    return $number % 2 === 0;
 });

 // arrow functions
 $odds = array_filter($numbers, fn($number) => $number % 2 !== 0);

 echo "<pre>";
 echo "Filter Evens \n";
 echo var_dump($evens);
 echo "</pre>";

 echo "<pre>";
 echo "Filter Odds \n";
 echo var_dump($odds);
 echo "</pre>";

 // Map
 echo "<pre>";
 echo "Map \n";
 echo var_dump(
     array_map(fn($number) => $number * $number, $numbers)
 );
 echo "</pre>";

 // Reduce
 echo "<pre>";
 echo "Reduce | Sum of numbers \n";
 echo var_dump(
     array_reduce($numbers, fn($acc, $curr) => $acc + $curr, 0)
 );
 echo "</pre>";

 // Associative arrays
 $person = [
     'name' => 'Pedro',
     'surname' => 'Barcellos',
     'age' => 24,
     'hobbies' => ['Games', 'Movies']
 ];

 echo '<pre>';
 var_dump($person);
 echo '</pre>';
 
 // Get element by key
 echo $person['name'] . '<br>';
 echo $person['age'] . '<br>';

 // Set new element by Key
 $person['channel'] = 'HBO';

 echo '<pre>';
 echo $person['channel'] . "<br>";
 echo '</pre>';

 // Check if array has specific key
 echo var_dump(isset($person['age'])) . "<br>";
 echo var_dump(isset($person['alive'])) . "<br>";
 
 echo '<br>';

 // Print keys of the array
 echo '<pre>';
 echo var_dump(array_keys($person));
 echo '</pre>';

 echo '<br><br>';

 // Print values of the array
 echo '<pre>';
 echo var_dump(array_values($person));
 echo '</pre>';

 // Sorting associative arrays by keys
 ksort($person);

 echo '<pre>';
 var_dump($person);
 echo '</pre>';

 // Reverse Sorting associative arrays by keys
 krsort($person);

 echo '<pre>';
 var_dump($person);
 echo '</pre>';

 // Sorting associative arrays by values
 asort($person);
 
 echo '<pre>';
 var_dump($person);
 echo '</pre>';

 // Reverse Sorting associative arrays by values
 arsort($person);
 
 echo '<pre>';
 var_dump($person);
 echo '</pre>';

 // Two dimensional arrays

 $todoItems = [
     [
         'title' => 'item 1',
         'completed' => true
     ],
     [
         'title' => 'item 2',
         'completed' => false
     ],
     [
         'title' => 'item 3',
         'completed' => false
     ],
 ];

 echo '<pre>';
 var_dump($todoItems);
 echo '</pre>'; 

 echo var_dump($todoItems[0]) . '<br>';
 echo var_dump($todoItems[0]['title']) . '<br>';
 echo var_dump($todoItems[0]['completed']) . '<br>';

 //https://www.php.net/manual/en/ref.array.php

?>
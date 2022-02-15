<?php
 // stdClass -> Standard generic class in PHP
 $pedro = new stdClass;
 $pedro->name = 'Pedro';
 $pedro->age = 24;
 $pedro->is_alive = true;

 echo '<pre>';
 echo var_dump($pedro);
 echo '</pre>';

 $name = $pedro->name;
 $age = $pedro->age;
 $is_alive = $pedro->is_alive ? 'Yes' : 'No';

 echo "Name: $name | Age: $age | Is alive: $is_alive";

?>
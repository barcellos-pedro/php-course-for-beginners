<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}


function operations($a, $b, $operation)
{
    $multiply = fn($a, $b) => $a * $b;
    $divide = fn($a, $b) => $a / $b;
    
    $operations = [
        'add' => add($a, $b),
        'subtract' => subtract($a, $b),
        'multiply' => $multiply($a, $b),
        'divide' => $divide($a, $b)
    ];

    return $operations[$operation];
}

?>
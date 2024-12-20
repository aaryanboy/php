<?php

function sum(...$number) {
    $sum = 0; 
    foreach ($number as $num) {
        $sum += $num; 
    }
    return $sum; 
}

echo "The sum of 1, 2, 3, 4 is: " . sum(1, 2, 3, 4) . "<br>";
echo "The sum of 10, 20, 30 is: " . sum(10, 20, 30) . "<br>";
?>

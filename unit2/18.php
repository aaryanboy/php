<?php
$associativeArray = [
    "apple" => 10,
    "bapple" => 5,
    "capple" => 15,
    "dapple" => 7
];

$shuffledArray = $associativeArray;
ksort($shuffledArray); 
shuffle($shuffledArray);
echo "Shuffled associative array: ";
print_r($shuffledArray);
?>

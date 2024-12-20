<?php
$numbers = [12, 5, 8, 22, 45, 67, 18, 34];

sort($numbers);
echo "Sorted array: " . implode(", ", $numbers) . "\n";

$thirdHighest = $numbers[count($numbers) - 3];
echo "3rd highest number: $thirdHighest\n";

$associativeArray = [1 => 10, 2 => 50, 3 => 20, 4 => 40];
asort($associativeArray);
echo "Associative array sorted: ";
print_r($associativeArray);
?>

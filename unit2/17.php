<?php
$city1 = [30, 32, 29, 33, 28, 31, 35];
$city2 = [25, 27, 26, 24, 29, 28, 30];

$all_temperatures = array_merge($city1, $city2);
$average_temp = array_sum($all_temperatures) / count($all_temperatures);
sort($all_temperatures);
$highest = array_slice($all_temperatures, -3);
$lowest = array_slice($all_temperatures, 0, 3);

echo "Average Temperature: " . $average_temp . "°C<br>";
echo "3 Highest Temperatures: " . implode(", ", $highest) . "°C<br>";
echo "3 Lowest Temperatures: " . implode(", ", $lowest) . "°C<br>";

?>

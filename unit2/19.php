<?php
date_default_timezone_set('Europe/Paris');
$currentDate = new DateTime();

echo $currentDate->format('d.m.y') . "\n"; 
echo $currentDate->format('m, j, Y') . "\n";  
echo $currentDate->format('F j, Y, g:i A') . "\n";  
echo $currentDate->format('Ymd') . "\n";
echo $currentDate->format('H:i:s, d-m-y') . "\n"; 
echo "It is the " . $currentDate->format('j') . "th day.\n";  
echo $currentDate->format('D. M j Y g:i:s T') . "\n";  // Fri. Jul 12 2024 8:27:46 CEST
echo $currentDate->format('H:i:s') . "\n";  // 08:27:46
echo $currentDate->format('Y-m-d H:i:s') . "\n";  // 2024-07-12 08:27:46
?>

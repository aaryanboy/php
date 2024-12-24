<?php
date_default_timezone_set('Europe/Paris');
$currentDate = new DateTime();

echo $currentDate->format('d.m.y') . "\n"; 
echo $currentDate->format('m, j, Y') . "\n";  
echo $currentDate->format('F j, Y, g:i A') . "\n";  
echo $currentDate->format('Ymd') . "\n";
echo $currentDate->format('H:i:s, d-m-y') . "\n"; 
echo "It is the " . $currentDate->format('j') . "th day.\n";  
echo $currentDate->format('D. M j Y g:i:s T') . "\n";  
echo $currentDate->format('H:i:s') . "\n";  
echo $currentDate->format('Y-m-d H:i:s') . "\n";  
?>

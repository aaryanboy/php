<?php
$string = "Rs 12,123.123";

$string1 = preg_replace("/[^0-9,\.]/", "", $string);
echo $string1. "\n";
?>

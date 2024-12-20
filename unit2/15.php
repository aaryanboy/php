<?php
$string = "Hello";

$reversedString = '';
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
}
echo $reversedString . "\n";
?>

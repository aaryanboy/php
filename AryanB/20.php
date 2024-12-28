<?php

function gcd($a, $b) {
    return ($b == 0) ? $a : gcd($b, $a % $b);
}

function factorial($n) {
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}

function dynamicCall($functionName, ...$args) {
    return $functionName(...$args);
}
echo "GCD of 48 and 18 is: " . dynamicCall('gcd', 48, 18) . "<br>";
echo "Factorial of 5 is: " . dynamicCall('factorial', 5) . "<br>";

?>
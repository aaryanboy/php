<?php
class MathOperations {
    public function multiply($a, $b) {
        if (is_int($a) && is_int($b)) {
            return $a * $b;
        } elseif (is_float($a) && is_float($b)) {
            return round($a * $b, 2);
        } else {
            return "Invalid input types. Both should be either integers or floats.";
        }
    }
}
$math = new MathOperations();
echo $math->multiply(5, 3) . "<br>"; 
echo $math->multiply(5.5, 3.3) . "<br>";  
echo $math->multiply(5, "3") . "<br>";  
?>

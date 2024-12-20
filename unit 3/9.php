<?php
class MathOperations {
    public static $value = 10;
    public static function multiply($a, $b) {
        return $a * $b;
    }
    public static function getValue() {
        return self::$value;
    }
}
echo "Static Property: " . MathOperations::$value . "<br>";  
echo "Multiplication Result: " . MathOperations::multiply(5, 3) . "<br>"; 
echo "Static Property via Method: " . MathOperations::getValue() . "<br>"; 
?>

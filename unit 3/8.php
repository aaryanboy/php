<?php
class MathOperations {
    public function add($a, $b = 0) {
        return $a + $b;
    }
}

$math = new MathOperations();
echo $math->add(5) . "\n";  
echo $math->add(5, 10) . "\n";  
?>

<?php
class MathOperations {
   public function sum() {
       $args = func_get_args();
       return array_sum($args);  
   }
}
$math = new MathOperations();
$result1 = $math->sum(1, 2, 3, 4);  
$result2 = $math->sum(10, 20);   
echo "Sum of 1,2,3,4 = " . $result1 . "<br>";
echo "Sum of 10,20 = " . $result2 . "\n";
?>

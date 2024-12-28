<?php
$a=1245;
$sum=0;
while($a!=0){
    $b=($a%10);
    $sum=$sum+$b;
    $a=intval($a/10);

}
echo $sum;
?>

<?php
$a=1245;
$sum=0;
do{
    $b=($a%10);
    $sum=$sum+$b;
    $a=intval($a/10);

}while($a!=0);
echo $sum;
?>

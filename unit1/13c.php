<?php
$a=0;
$b=1;
echo "$a \t  $b";
for($i=0;$i<=12;$i++)
{
$sum=$a+$b;
echo"\t $sum ";
$a=$b;
$b=$sum;

}
?>
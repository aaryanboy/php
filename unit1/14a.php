<?php
$a=1234;
$inv=0;
do{
    $b=($a%10);
    $inv=$inv*10+$b;
    $a=intval($a/10);

} while($a!=0);
echo $inv;
?>

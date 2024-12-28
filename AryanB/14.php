<?php
$a=35453;
$inv=0;
while($a!=0){
    $b=($a%10);
    $inv=$inv*10+$b;
    $a=intval($a/10);

}
echo $inv;
?>

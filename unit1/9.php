<?php
$var1=10;
$var2=25;
$var3=15;
if( $var1>$var2 and $var1>$var3 )
{
    print(" $var1 is greater than $var2 and $var3");
}
elseif($var2>$var1 and $var2>$var3)
{
    print(" $var2 is greater than $var1 and $var3");
}
else{
    print(" $var3 is greater than $var1 and $var2");
}
?>
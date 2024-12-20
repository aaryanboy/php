<?php
$num=121;
$a=$num;
$inv=0;
do{
    
    $b=($a%10);
    $inv=$inv*10+$b;
    $a=intval($a/10);

}while($a!=0);
if($num == $inv)
{
    print"$num is palindrome number";
}
else{
    print "$num is  not a palindrome number";
}
?>

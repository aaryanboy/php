<?php
function factorial(){
    $num=121;
    $a=$num;
    $inv=0;
    while($a!=0){
        
        $b=($a%10);
        $inv=$inv*10+$b;
        $a=intval($a/10);
    
    }
    if($num == $inv)
    {
        print"$num is palindrome number";
    }
    else{
        print "$num is  not a palindrome number";
    }
}
function amstrong(){
    $num=121;
$a=$num;
$inv=0;
do{
    
    $b=($a%10);
    $inv=$inv^3+$b;
    $a=intval($a/10);

}while($a!=0);
if($num == $inv)
{
    print"$num is armstrong number";
}
else{
    print "$num is  not a armstrong number";
}
}
function reverse(){
    $a=1234;
$inv=0;
do{
    $b=($a%10);
    $inv=$inv*10+$b;
    $a=intval($a/10);

} while($a!=0);
echo $inv;
}
function posorneg(){
    $num=1;
    if($num>=0 )
    {
        echo "positive number";
    }
    else{
        echo "negative number";
    }
    
}
function sum($num) {
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    return $sum;
}
function quadratic($a, $b, $c) {
    $discriminant = $b * $b - 4 * $a * $c;
    if ($discriminant > 0) {
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        return "Roots are real and different: $root1 and $root2";
    } elseif ($discriminant == 0) {
        $root = -$b / (2 * $a);
        return "Roots are real and the same: $root";
    } else {
        return "No real roots";
    }
}

function LeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) ? "Leap Year" : "Not a Leap Year";
}
echo factorial() . "<br>";
echo amstrong() . "<br>";
echo reverse() . "<br>";
echo posorneg() . "<br>";
echo sum(12345) . "<br>";
echo quadratic(1, -3, 2) . "<br>";  
echo LeapYear(2024) . "<br>";  
    

?>

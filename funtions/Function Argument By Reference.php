<?php
//function testing(&$string){
//    $string .= " and something extra";
//}
//
//$str = "this is a string";
//testing($str);
//echo $str;

function first($num){
    $num += 5;
}

function second(&$num){
    $num += 5;
}

$number = 10;
first($number);
echo "Original value is $number<br>";

second($number);
echo "Original value is $number<br>";

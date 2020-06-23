<?php
//function hello($fname, $lname){
//    $v ="$fname $lname";
//    return $v;
//}
//
//$name =hello("Tanjina", "Shumi");
//echo "Hello $name";

function sum($math, $eng, $bng){
    $v =$math + $eng + $bng;
    return $v;
}

function percentage($st){
    $per =$st/3;
    echo $per;
}

$total =sum(55, 65, 88);
percentage($total);
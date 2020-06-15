<?php
function hello($fname,$lname){
    echo "Hi $fname $lname <br>";
}
hello("Tanjina", "Shume");
hello("Sadia", "Akter");

function value($fname="First",$lname="Last"){
    echo "Hi $fname $lname <br>";
}
value("Tanjina");
value("Sadia", "Akter");

//Arithmetic operation
function sum($a, $b){
    echo $a+$b . "<br>";
}
sum(10,20);

//Arithmetic operation
function sum2($a, $b){
    echo $a+$b . "<br>";
}
$fvalue=10;
$lvalue=20;
sum2($fvalue,$lvalue);
<?php

//$colors = ["red", 20, "blue", "green"];
//echo $colors[0];

$age = [
    "bill" => 25,
    "steve" => 28,
    "elon" => 22
];
echo $age["bill"] . "<br>";
echo $age["steve"] . "<br>";
echo $age["elon"] . "<br>";



//another way
$age = [
    "bill" => 25,
    "steve" => 28,
    "elon" => 22
];
echo "<pre>";
    print_r($age);
echo "</pre>";

$age2 = [
    "bill" => 25,
    "steve" => 28,
    "elon" => 22
];
echo "<pre>";
var_dump($age2);
echo "</pre>";
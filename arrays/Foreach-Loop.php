<?php

$age = ["bill", "steve", "elon"];
foreach ($age as $value){
    echo "$value <br>";
}

//another way
$age = [
    "bill" => 25,
    "steve" => 28,
    "elon" => 22
];
echo "<ul>";
foreach ($age as $key => $value){
    echo "<li>$key = $value </li>";
}
echo "</ul>";

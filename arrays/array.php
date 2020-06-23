<?php

//$colors = ["red", 20, "blue", "green"];
//echo $colors[0];

$colors = ["red", 20, "blue", "green"];
echo "<ul>";
for($i = 0; $i < 4; $i++ ){
    echo "<li> $colors[$i] </li>";
}
echo "</ul>";
//another way
$colours = ["red", 20, "blue", "green"];
echo "<pre>";
    print_r($colours);
echo "</pre>";
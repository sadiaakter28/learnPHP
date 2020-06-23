<?php
$emp = [
    [1, "Krishana", "Manager", 50000],
    [2, "Salman", "Manager", 50000],
    [3, "Mohan", "Manager", 50000],
    [4, "Amir", "Manager", 50000],
];
foreach ($emp as $v1){
    foreach ($v1 as $v2){
        echo "$v2  ";
    }
    echo "<br>";
}
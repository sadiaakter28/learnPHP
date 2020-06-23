<?php
//multidimensional array with php foreach loop and list function
$emp = [
    [1, "Krishana", "Manager", 50000],
    [2, "Salman", "Manager", 50000],
    [3, "Mohan", "Manager", 50000],
    [4, "Amir", "Manager", 50000],
];
foreach($emp as list($id, $name, $designation, $salary)){
    echo "$id - $name $designation $salary <br>";
}


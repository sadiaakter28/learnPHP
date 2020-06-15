<?php
$x=10;
//($x > 20) ? $z="Greater": $z="Smaller";
//$x > 20 ? $z="Greater": $z="Smaller";
//$z=($x > 20) ? "Greater": "Smaller";
//$z=$x > 20 ? "Greater": "Smaller";
$z="Value is : " . ($x > 20 ? "Greater": "Smaller");
echo $z;
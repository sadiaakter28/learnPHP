<?php
//Array Count
$food = ['orange', 'banana', 'apple', 'grapes'];

//echo count($food);

//Sizeof Function
//$food = ['orange', 'banana', 'apple', 'grapes'];
//echo sizeof($food);

//Multidimensional Array Count
//$food = [
//    'fruits'=>['orange', 'banana', 'apple', 'grapes'],
//    'veggies'=>['carrot', 'collard', 'pea'],
//];
//echo count($food);

//for full array
//echo count($food,1);

//for one specific array
//echo count($food['fruits'],1);

//Multidimensional Sizeof Function
//$food = [
//    'fruits'=>['orange', 'banana', 'apple', 'grapes'],
//    'veggies'=>['orange', 'banana', 'apple', 'grapes'],
//];
//echo sizeof($food);

//for loop
//$food = ['orange', 'banana', 'apple', 'grapes'];
//$len = count($food);
//for($i = 0; $i <$len; $i++){
//    echo $food[$i] . "<br>";
//}


//array count values
$foods = ['orange', 'banana', 'apple', 'grapes', 'banana'];
echo "<pre>";
print_r(array_count_values($foods));
echo "</pre>";
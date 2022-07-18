<?php
// Write a PHP script that inserts a new item in an array in any position. Go to the editor
// Expected Output :
// Original array : 
// 1 2 3 4 5 
// After inserting '$' the array is :
// 1 2 3 $ 4 5

$orignal=array(1,2,3,4,5);
// print_r($orignal);
foreach($orignal as $value){
    echo $value.",";
}

echo "<br>";
$inserted='$';

array_splice($orignal,3,0,$inserted);// 3 means After 3rd element of array, 0 means remove 0 number of element from $orignal and replace it by $inserted
//return array by print_r()
// print_r($orignal);

//return array by foreach loop
foreach($orignal as $value){
    echo $value.",";
}

//More practice with array_splice()
//1,2,3,$,4,5, before array_splice
array_splice($orignal,1,2,'9');// 1 means remove element from having 1 index and 2 means two number element removed i.e, 2 and 3 removed and replace it with '9'
print_r($orignal);
// Array ( [0] => 1 [1] => 9 [2] => $ [3] => 4 [4] => 5 ) after array_splice
echo "<br>";
foreach($orignal as $value){
    echo $value.",";
}


?>
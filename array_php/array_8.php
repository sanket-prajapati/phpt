<?php
//  Write a PHP script to sort the following associative array : Go to the editor
//  array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
//  a) ascending order sort by value
//  b) ascending order sort by Key
//  c) descending order sorting by Value
//  d) descending order sorting by Key

$arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
// $arr2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

function print_arr($arr){
    foreach($arr as $name=>$age){
        echo "key=".$name." value=".$age.", ";
    }
    echo "<br>";
}
// ascending order sort by value
sort($arr);
print_arr($arr);

// ascending order sort by Key
ksort($arr);
print_arr($arr);

// foreach($arr as $y=>$y_value)
// {
// echo "Age of ".$y." is : ".$y_value."
// ";
// }

//output key value missing and it shows as index
//key=0 value=31, key=1 value=39, key=2 value=40, key=3 value=41,
// key=0 value=31, key=1 value=39, key=2 value=40, key=3 value=41,

?>
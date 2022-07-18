<?php
// Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. Go to the editor
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6 
// List of seven lowest temperatures : 60, 62, 63, 63, 64, 
// List of seven highest temperatures : 76, 78, 79, 81, 85,

$temp=array('78', '60', '62', '68', '71', '68', '73', '85', '66', '64', '76', '63', '75', '76', '73', '68', '62', '73', '72', '65', '74', '62', '62', '65', '64', '68', '73', '75', '79', '73');

$len=count($temp);
// foreach($temp as $value){
//     $value

// }
$sum=0;
for($i=0;$i<$len;$i++){
    $sum=$sum+$temp[$i];
}
$avg=$sum/$len;
echo "Average Temperature is: $avg";

sort($temp);

echo "<br>List of Five lowest temperature";
for($i=0;$i<5;$i++){
    echo $temp[$i].", ";
}

echo "<br>List of five largest temperature";
for($i=$len-5;$i<$len;$i++){
    echo $temp[$i].", ";
}

echo "<br>By decending order";
rsort($temp);
for($i=0;$i<5;$i++){
    echo $temp[$i].", ";
}



?>
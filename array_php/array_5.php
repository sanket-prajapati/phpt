<?php
// $color = array(4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white

$color=array(4=>'white',6=>'green',11=>'red');
print_r(array_values($color));
echo "<br>";
echo reset($color);

//testing array inside array
$a1=array("a"=>"red","b"=>"green");
$a2=array($a1,"1"=>"blue","2"=>"yellow");// one array inside another array

print_r($a2);
?>
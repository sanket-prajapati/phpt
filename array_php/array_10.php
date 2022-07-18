<?php
// Write a PHP function to change the following array's all values to upper or lower case. Go to the editor
// Sample arrays :
// $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
// Expected Output :
// Values are in lower case.
// Array ( [A] => blue [B] => green [c] => red ) 
// Values are in upper case.
// Array ( [A] => BLUE [B] => GREEN [c] => RED )

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$str_color=implode(',',$color);//convert array into string
echo $str_color."<br>";

echo strtolower($str_color)."<br>";

echo strtoupper($str_color);




?>
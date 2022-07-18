<?php
//write a program to print 5 to 15 number
$count=5;
while($count<=15){
    echo $count."<br>";
    $count++;
}
/*Description:
Write a PHP program to reverse the string.

Instructions:
You can use any string related built-in Function.
You can use only one variable.
 */
$str="This is a string";
echo strrev($str);

/*Description:
Write a PHP program to find the length of the string. */
echo "<br>".strlen($str);

// Description:
// Write a PHP program to count the words in the string.
echo "<br>".str_word_count($str);

// Description:
// Write a PHP program to convert all the characters inside the string into uppercase.
$str_2="For coNvert loWer case";
echo "<br>".strtoupper($str_2);
echo "<br>".strtolower($str_2);
?>
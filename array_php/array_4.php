<?php
/*$x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. Go to the editor
Sample Output :
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) } */

// $x=array(1,2,3,4,5);
// foreach($x as $value){
//     print_r($value);
// }

// echo "{ ";
// for($i=0;$i<5;$i++){
//     echo "[$i]=>int($x[$i]) ";
// }
// echo " }";

// echo "<br>".array_pop($x);//to delete last element of array
// echo "<br>".array_push($x,6);//to add elemnt in array at last position
// print_r($x);
// echo "<br>".array_shift($x);/*to remove first element of array and return its value but in this array not key and value, therefore return 1.*/
// print_r($x);

$x=array(1,2,3,4,5);
echo var_dump($x);
echo "<br>";
unset($x[3]);
$x=array_values($x);//return all values of array
echo var_dump($x);



?>
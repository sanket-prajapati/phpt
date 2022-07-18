<?php
/*Write a Program to create following pattern using for loops
*
**
***
****
*****
******
*******
*********/
$row=8;
for($i=0;$i<=$row;$i++){
    for($j=0;$j<$i;$j++){
        echo "*";
    }
    echo "<br>";

}
?>
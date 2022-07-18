<?php
/*$color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

green
red
white*/
$color = array("white", "green", "red");
foreach($color as $value1){
    echo $value1.",";
}
sort($color);
echo "<br>";
echo var_dump(sort($color))."<br>";/*it return true it means operation is performed now we can print array by for loop*/
$color_len=count($color);
echo "<ul>";
for($i=0;$i<3;$i++){
    echo "<li>".$color[$i]."</li>";
}
echo "</ul>";
//one more method
$color2=array('white','green','red');
//now sorting according to ascending order
sort($color2);

echo "<ul>";
foreach($color2 as $value2){
    echo "<li>".$value2."</li>";
}
echo "</ul>";



?>
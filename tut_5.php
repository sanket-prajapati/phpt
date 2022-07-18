<!-- Write a PHP program to calculate area of rectangle by using PHP Function.

Condition
You must use a PHP Function.
There should be two arguments i.e. length & width. -->
<?php
function rect_area($len,$width){
    $area=$len*$width;
    echo "<br> Area of rectagle is ".$area;
}
rect_area(12,10);
rect_area(5,4);

?>
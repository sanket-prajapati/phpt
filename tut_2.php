<!-- Description: -->
<!-- Write a PHP program to check whether a number is positive, negative or zero. -->
<?php
$num=234;//enter any number
if($num>0){
    echo $num."<br>The given number is positive";
}
else if($num<0){
    echo $num."<br>The given number is nagative";
}
else if($num==0){
    echo $num."<br> The given number is zero";
}
else{
    echo"please enter a numaric value";
}


?>
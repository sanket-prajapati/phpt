<!-- Write a PHP program to find factorial of a number using recursive function.

What is Recursive Function?
A recursive function is a function that calls itself. -->
<?php
function factorial($num){
    if($num<2){
        return 1;
    }
    else{
        // echo "factorial of $num is ";
        return ($num*factorial($num-1));
    }
}
// echo "Factorial of $num is";//first define $num and assign its value
echo factorial(4);

?>
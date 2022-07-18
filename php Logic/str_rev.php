<?php
function rev_str($arr_str){
    $end=count($arr_str)-1;
    for($i=$end;$i>=0;$i--){
        echo($arr_str[$i]);
        // print_r($arr_str[$i]);//it return sam as echo
        // echo "=".$i.",";
    }
}


$str="I Love Code";
$arr_str=str_split($str);//break the word into character
// $arr_str=explode(" ",$str);//break the string into word
print_r($arr_str);/*for the conversion is done or not only use print_r(), not use echo*/
echo count($arr_str)."<br>";//it return 11
// echo $arr_str;//it show the warning error
rev_str($arr_str);



?>
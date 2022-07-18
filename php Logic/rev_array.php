<?php

function rev_array($arr) {
    $end=count($arr)-1;
    for($i=$end;$i>=0;$i--){
        echo $arr[$i];
        // $newarr=$arr[$i];
        if($i>0){
            echo ",";
        }
        else{
            echo "";
        }
    }
}
$arr=array(1,3,5,34);
echo "[";
rev_array($arr);
echo "]";

?>
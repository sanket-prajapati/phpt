<?php
function rev_str($str){
    $end=strlen($str)-1;
    $revstr="";
    for($i=$end;$i>=0;$i--){
        echo $revstr=$str[$i];
    }
    return $revstr;
}
$str="I love code";
rev_str($str);

?>
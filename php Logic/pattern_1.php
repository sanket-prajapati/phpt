<?php

/*print 
   1
  23
 456
*/

$a=1;
for($i=0;$i<3;$i++){
    for($j=0;$j<2-$i;$j++){
        echo "-";
    }
    for($k=0;$k<=$i;$k++){
        echo $a++;
    }
    echo "<br>";
}


?>
<?php
/*$color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string - Go to the editor
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color.*/

$color=array('white','green','red','blue','black');
$str='"The memory of that scene for me is like a frame of film forever frozen at that moment: the '.$color[2].' carpet, the '.$color[1].' lawn, the '.$color[0].' house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
 and the words '.$color[2].', '.$color[1].' and '.$color[0].' will come from $color."';
echo $str;
echo "<br>The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

?>
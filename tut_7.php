<?php
echo " Welcome to date tutorial";
// $d= date("d-m-y");
// $D=date("d m Y");
// $d=date("d F Y");
$d=date("d F Y,g:i A");
echo "<br>Today date is $d <br>";
// echo "<br>".$D;

//print something like this: Monday 8th Augest 2005 03:12:46 PM;
$date=date("l jS \of F Y h:i:s A");
echo $date. "<br>";
echo "july 7, 2000 is on a ".date("l",mktime(0,0,0,1,7,2000));

$year=date("Y");
echo "Copyright $year all right are reserved";

?>
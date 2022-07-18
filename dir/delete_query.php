<?php
//create Databse connection
require 'configuration.php';

//delete query
$sql="DELETE FROM `trip_test` WHERE `sr no`=30";
// DELETE FROM `trip_test` WHERE `trip_test`.`sr no` = 27
$result=mysqli_query($conn,$sql);
if($result){
    echo "<br>record deleted";
}
else{
    echo "Fail to delete record".mysqli_error($conn);
}
// below method show error
// echo var_dump($result);
// $num=mysqli_num_rows($result);
// $num=mysqli_num_rows($result);
// if($num>0){
//     while($rows=mysqli_fetch_rows($result)){
//         var_dump($rows);
//     }
// }
$aff=mysqli_affected_rows($conn);
echo "<br> $aff number of rows affected";

$result2=mysqli_query($conn,"DELETE FROM `trip_test` WHERE `destination`='Ahmedabad' LIMIT 6");//LIMIT 6 means 6 number of recored will be deleted from destination is ahmedabad
echo "<br>".mysqli_affected_rows($conn);



?>
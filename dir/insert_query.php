<?php
//create databse connection
require 'configuration.php';

//variable to be inserted into table trip_test
$name='Yogesh';
$destination='Ahmedabad';

//insert trip data by insert query in trip_test teble
$sql1="INSERT INTO `trip_test`(`name`,`destination`) VALUES ('$name','$destination');";
/*$sql="INSERT INTO `trip_test` (`name`, `destination`, `updated at`) VALUES ('Suresh', 'Mumbai', '2022-07-09 18:16:43.000000')";*/
$result=mysqli_query($conn,$sql1);

//checking for insertion
if($result){
    echo "<br>query insertion successfully";
}
else{
    echo "<br>Fail to insert query".mysqli_error();
}


?>
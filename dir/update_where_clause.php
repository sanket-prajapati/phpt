<?php
//create database connection
require 'configuration.php';

//WHERE clause statment for updating and retriving record
$sql="SELECT * FROM `trip_test` WHERE `destination`='Ahmedabad'";
$result=mysqli_query($conn,$sql);


//usage of WHERE clause to fetch data from databse
$num=mysqli_num_rows($result);
echo "<br>".$num." Number of rows affected<br>";
$no=1;

if($num>0){
    while($rows=mysqli_fetch_assoc($result)){
        // echo var_dump($rows);
        echo $rows['sr no']." Hello ".$rows['name']." Welcome to ".$rows['destination'];
        echo "<br>";
        $no=$no+1;
    }
}

//usase of WHERE Clause to update record

// $sql2="UPDATE `trip_test` SET `name`='Savan' WHERE `destination`='Bhihar'";
$sql2="UPDATE `trip_test` SET `name`='Javan' WHERE `sr no`=12";
$sql3="UPDATE `trip_test` SET `name` = 'Yogesh13' WHERE `trip_test`.`sr no` = 11";
$result2=mysqli_query($conn,$sql2);
echo var_dump($result2);
if($result2){
    echo "Updated successfully";
}
else{
    echo "Fail to Update".mysqli_error($conn);
}

// $aff=mysqli_affected_rows($result2);
// echo "The number of row affected is $aff";

?>
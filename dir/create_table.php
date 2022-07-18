
<!-- CREATE TABLE `form_practice`.`trip_test` (`sr no` INT(11) NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `destination` TEXT NOT NULL , `updated at` DATETIME NOT NULL , PRIMARY KEY (`sr no`)); -->
<?php
//create connection
require 'configuration.php';

$sql="CREATE TABLE `trip_test` (`sr no` INT(11) NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `destination` TEXT NOT NULL , `updated at` DATETIME NOT NULL , PRIMARY KEY (`sr no`));";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Table created successfully.";
}
else{
    echo "Fail to create table".mysql_error($conn);
}
?>
<?php
//create connection
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password);
if(!$conn){
    echo "Fail to connect db".mysqli_connect_error($conn);
}
else{
    echo "Connection is succsessful.";
}

//Create database
$sql="CREATE DATABASE dbharry";
$result=mysqli_query($conn,$sql);//query execute karo for create databse

if($result){
    echo "Database created successfully";
}
else{
    echo "Database not created because of erorr ".mysqli_error($conn);
}
echo $result;
echo "The result is ";
echo var_dump($result)."<br>";//If database already created then it return false otherwise true


?>
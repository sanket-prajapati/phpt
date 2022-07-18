<?php
//create connection

$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password);
//ckeck for connection and create databse if successfull connection
if($conn){
    $sql="CREATE DATABASE db_2";
    $result=mysqli_query($conn,$sql);
    echo var_dump($result);
    if($result){
       echo "databse created succssefully";
    } 
    else{
        echo "Error to create databse".mysqli_error($conn);
    }
}
else{
    echo "Fail to connect database".mysqli_connect_error($conn);
}


?>
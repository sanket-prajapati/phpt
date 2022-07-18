<?php
$server="localhost";
$username="root";
$password="";
$database="dbharry";
//connect to mysqli databse
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "Fail to connect dbharry".mysqli_connect_error($conn);
}
else{
    echo "success to connect db";
}
?>
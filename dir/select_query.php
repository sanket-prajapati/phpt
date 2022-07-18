<?php
//Creating database connection
require 'configuration.php';

$sql="SELECT * FROM `trip_test`";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Selction was done";
}
else{
    echo "Fail to select trip data".mysql_error($conn);
}
//number of rows in trip_test table
// echo mysqli_num_rows($result);
$num=mysqli_num_rows($result);
echo "<br> $num number of record found in database <br>";

//Display the row return by sql query
if($num>0){
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);//desplay only first row
    // echo "<br>";
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);//It give one by one record untill record not found
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);
    // echo "<br>";
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);
    // echo "<br>";
    // $rows=mysqli_fetch_assoc($result);
    // echo var_dump($rows);
    // echo "<br>";
    // $rows=mysqli_fetch_assoc($result);//Jya sudhi $rows ni value null nai thay tya sudhi print thase
    // echo var_dump($rows);

    //We can fetch it better way by using while loop

    while($rows=mysqli_fetch_assoc($result)){ /*jya sudhi null nahi thay mysqli_fetch_assoc tya sudhi print karse*/
        // echo var_dump($rows);
            echo $rows['sr no']." Hello ".$rows['name']." Welcome to ".$rows['destination'];
            echo "<br>";

    }

}

//Filter record by WHERE clause
// $result2=mysqli_query($conn,"SELECT * FROM `trip_test`WHERE `destination`='Bhihar'");
// $result2=mysqli_query($conn,"SELECT * FROM `trip_test`WHERE `destination`='Surat' OR `name`='Yogesh'");
// output
// The 5 number of rows are affected
// Hello Shubham and welcome to Surat
// Hello Yogesh and welcome to Bhihar
// Hello Yogesh and welcome to Ahmedabad
// Hello Yogesh and welcome to Ahmedabad
// Hello Yogesh and welcome to Ahmedabad

// $result2=mysqli_query($conn,"SELECT * FROM `trip_test`WHERE `destination`='Bhihar' AND `name`='Yogesh'");//WHERE clause with AND conditional operator
//Output
// The 1 number of rows are affected
// Hello Yogesh and welcome to Bhihar

// $result2=mysqli_query($conn,"SELECT `name`, `destination` FROM `trip_test`WHERE `destination`='Bhihar' AND `name`='Yogesh'");//fectch record with only two colomn 'name' 'destination'
//Output
//The 1 number of rows are affected
// array(2) { ["name"]=> string(6) "Yogesh" ["destination"]=> string(6) "Bhihar" } by using var_dump($rows);

//Order By
// $result2=mysqli_query($conn,"SELECT * FROM `trip_test`WHERE `destination`='Bhihar' ORDER BY `name` DESC");
// $result2=mysqli_query($conn,"SELECT * FROM `trip_test`WHERE `destination`='Bhihar' ORDER BY `name`");//by default value print asscending order

//SELECT TOP 
// $result2=mysqli_query($conn,"SELECT TOP 4 * FROM `trip_test`WHERE `destination`='Bhihar' ORDER BY `name`");
// $result2=mysqli_query($conn,"SELECT TOP 3 * FROM `trip_test`");
// $result2=mysqli_query($conn,"SELECT * FROM `trip_test` FETCH FIRST 3 ROWS ONLY ");

$result2=mysqli_query($conn,"SELECT COUNT(`name`) FROM `trip_test` WHERE `destination`='Bhihar'");
//Output
// The 1 number of rows are affected
// array(1) { ["COUNT(`name`)"]=> string(2) "12" }// je trip Bhihar karvana 6e temana total 12 name colomn 6e

$aff=mysqli_affected_rows($conn);
echo "<br>  The $aff number of rows are affected <br>";
$num=mysqli_num_rows($result2);

if($num>0){
    while($rows=mysqli_fetch_assoc($result2)){
        // echo "Hello ".$rows['name']." and welcome to ".$rows['destination'];
        echo var_dump($rows);
        echo "<br>";
    }
}

?>
<?php
// Write a PHP script which decodes the following JSON string. Go to the editor
// Sample JSON code :
// {"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }}
// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown

$jsonObj='{
    "Title":"The Cuckoos Calling",
    "Author":"Robert Galbraith",
    "Datail":{
        "Publisher":"Little Brown"
    }
}';// write an Object in php by single quate before and after curly brackets

echo $jsonObj."<br>";

function w3r_function($value,$key){
    echo "$key:$value<br>";
}

$jsonArr=json_decode($jsonObj,true);
// var_dump($jsonArr);//it shows the null

array_walk_recursive($jsonArr,"w3r_function");//w3r_function mean walk through recursive
/*we use aray_walk_recursive function beacuse here array inside another array and with this function always uses built in php function like we use above*/


$obj='{
    "name":"Sanket",
    "passing Year":2021,
    "JOb detail":"Job seeker"
}';
$phpObj=json_decode($obj);
var_dump($phpObj);
echo "<br>";
$assocArr=json_decode($obj,true);
var_dump($assocArr);
?>
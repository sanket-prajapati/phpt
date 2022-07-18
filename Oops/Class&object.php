<?php

class Car{
    //class property
    public $comp;
    public $color="green";
    public $hasSunRoof=true;
    //add method to class
    public function hello(){
        return "beep";
    }
}
//Creation of object
$bmw=new Car();
$mercedes=new Car();

//get properies of class
$bmw->color='blue';
$mercedes->comp='mercedes Benz';
$bmw->comp='bmw';

//vlues of properties get by echo
echo $bmw->color."<br>";
echo $mercedes->comp."<br>";

//before use of method atleast one object should be necessary
$car1=new car();
echo $car1->hello();



?>
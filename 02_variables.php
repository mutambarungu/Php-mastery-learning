<?php


$name = 'Blaise'; //string
$age = 30; //integer
$height = 1.75; //float
$is_student = true; //boolean
$fruits = ['apple', 'banana', 'cherry']; //array

echo "My name is $name, I am $age years old and my height is $height meters.\n";
echo 'my name is ' . $name . 'with age ' . $age . 'and height ' . $height;
echo $name; // outputs: $name
echo $is_student;
var_dump($name); // outputs: string(6) "Blaise"

define('COUNTRY', 'USA');
echo COUNTRY; // outputs: USA

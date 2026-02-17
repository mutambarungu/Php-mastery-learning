<?php


$fruits = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
//length of the array
echo count($fruits) . "\n"; // Outputs: 5

//add to array
$fruits[] = 'fig';
array_push($fruits, 'grape');
echo array_unshift($fruits, 'avocado');
// Outputs: Array ( [0] => avocado [1] => apple [2] => banana [3] => cherry [4] => date [5] => elderberry [6] => fig [7] => grape )

//remove from array
echo array_pop($fruits); // removes 'grape'
print_r($fruits); // Outputs: Array ( [0] => avocado [1] => apple [2] => banana [3] => cherry [4] => date [5] => elderberry [6] => fig )


$arr1 = ['red', 'green'];
$arr2 = ['car', 'bike'];
$arr3 = array_combine($arr1, $arr2);
print_r($arr3); // Outputs: Array ( [red] => car [green]
$arr4 = array_flip($arr3);
print_r($arr4) . '<br>'; // Outputs: Array ( [car] => red [bike] => green )


$numbers = range(1, 20);
$newNumbers = array_map(function ($number) {
    return "Number" . $number;
}, $numbers);
// print_r($newNumbers);


$num = array_filter($numbers, function ($numb) {
    return $numb <= 10;
});
print_r($num);

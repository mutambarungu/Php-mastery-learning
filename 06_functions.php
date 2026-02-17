<?php

function registerUser($email)
{
    echo $email . " has been registered successfully." . '<br>';
}
registerUser('Blaise');


$sayHello = fn($name) => 'Hello, ' . $name . '<br>';
echo $sayHello('Blaise');


function addNumbers($a, $b)
{
    return $a + $b;
}
echo addNumbers(5, 10) . '<br>';

function calculateDiscount($finalPrice, $price = 10000, $discount = 10)
{
    return $finalPrice = $price - ($price * $discount / 100);
}
echo calculateDiscount($finalPrice) . '<br>';

function checkPass($score)
{

    if ($score >= 50) {
        return 'pass';
    } else {
        return 'fail';
    }
}
echo checkPass(30) . '<br>';




$students = [
    [
        'name' => 'alice',
        'age' => 20,
    ],
    [
        'name' => 'Bob',
        'age' => 16,
    ],
    [
        'name' => 'jane',
        'age' => 26,
    ]
];


function getAdult(array $students): array
{
    $adult = [];
    foreach ($students as $student) {
        if ($student['age'] > 18) {
            $adult[] = $student;
        }
    }
    return $adult;
}

echo getAdult($student) . '<br>';

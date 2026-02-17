<?php

$numbers = [1, 2, 3, 4, 5];
$fruits = array('apple', 'banana', 'cherry');

echo $fruits[1];


$person = [
    'name' => 'Alice',
    'age' => 28,
    'city' => 'New York'

];
echo $person['name'];

$people = [
    [
        'name' => 'Bob',
        'age' => 25
    ],
    [
        'name' => 'Carol',
        'age' => 30
    ]
];
echo $people[1]['name']; // Outputs: Carol

$programming_languages = ['PHP', 'JavaScript', 'Python', 'Java', 'C#'];
echo $programming_languages[0];
echo $programming_languages[count($programming_languages) - 1];
$programming_languages[] = 'Go';
echo count($programming_languages); // Outputs: 6

$student = [
    'name' => 'blaise',
    'age' => 22,
    'course' => 'Computer Science',
    'is_active' => true
];
echo "name {$student['name']}, course {$student['course']}";
$student['course'] = 'Data Science';
echo $student['course']; // Outputs: Data Science
$student['email'] = 'd@gmail.com';
print_r($student);

$users = [
    [
        'name' => 'Dave',
        'id' => 1,
        'role' => 'admin'

    ],
    [
        'name' => 'Eve',
        'id' => 2,
        'role' => 'editor'

    ],
    [
        'name' => 'Frank',
        'id' => 3,
        'role' => 'subscriber'

    ]
];

echo $users[1]['name'];
echo $users[0]['role'];

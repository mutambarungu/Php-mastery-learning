<?php

$x = 1;

do {
    echo " Number:  $x  <br>";
    $x++;
} while ($x <= 5);


$posts = [
    [
        'title' => 'First Post',
        'content' => 'This is the content of the first post.'
    ],
    [
        'title' => 'Second Post',
        'content' => 'This is the content of the second post.'
    ],
    [
        'title' => 'Third Post',
        'content' => 'This is the content of the third post.'
    ]
];
foreach ($posts as $post) {
    echo "{$post['title']}, {$post['content']} <br>";
}

$student = [
    'name' => 'Blaise',
    'age' => 22,
    'course' => 'Computer Science',
    'is_active' => true
];
foreach ($student as $key => $value) {
    echo "$key : $value <br>";
}

$fruits = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
foreach ($fruits as $index => $fruit) {
    echo ($index + 1) . ':' .  $fruit . '<br>';
    // echo strtoupper($fruit) . '<br>';
    // echo strlen($fruit) . '<br>';
};

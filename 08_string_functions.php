<?php
$st = 'Hello World ';
echo strlen($st) . '<br>'; // Length of the string
echo strtoupper($st) . '<br>'; // Convert to uppercase
echo strtolower($st) . '<br>'; // Convert to lowercase
echo trim($st) . '<br>'; // Remove whitespace from both ends
echo str_replace('World', 'PHP', $st) . '<br>'; // Replace '
echo strpos($st, 'o') . '<br>'; // Find position of first occurrence of 'o'
echo strrpos($st, 'o') . '<br>'; // Find position of last occurrence of 'o'
echo strrev($st) . '<br>'; // Reverse the string
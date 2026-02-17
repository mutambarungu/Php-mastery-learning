<?php
echo "Conditionals in PHP:\n";
$age = 3;
if ($age < 13) {
    echo "Child\n";
} elseif ($age >= 13 && $age < 20) {
    echo "Teenager\n";
} else {
    echo "Adult\n";
}
$t = date("H");
if ($t < "12") {
    echo "Good morning!\n";
} elseif ($t < "18") {
    echo "Good afternoon!\n";
} else {
    echo "Good evening!\n";
}

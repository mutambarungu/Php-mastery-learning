<?php

$file = fopen("test.txt", "a");

fwrite($file, "Blaise\n");
fwrite($file, "Alice\n");

fclose($file);

echo nl2br(file_get_contents("test.txt"));

<?php
$file = fopen("test.txt", "r+");
fwrite($file, "Blaise\n");
fwrite($file, "Alice\n");
fclose($file);                          `   
echo $file

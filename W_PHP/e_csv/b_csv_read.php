<?php
/* $file = "students.csv";
$file_handler = fopen("$file","r"); */
$file = fopen("students.csv", "r");

while (!feof($file)) {
    print_r(fgetcsv($file));
}
fclose($file);

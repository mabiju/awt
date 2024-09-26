<?php
$names = array(
    "ram,ram@gmail.com,24",
    "sita,sita@gmail.com,33",
    "hari,hari@gmail.com,44"
);

$file = fopen("students.csv", "w");

foreach ($names as $line) {
    fputcsv($file, explode(',', $line));
}
echo "Data inserted sucessfully.";
fclose($file);

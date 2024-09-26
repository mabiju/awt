<?php
$student = array(
    array(
        "name" => "Ram",
        "marks" => 67,
        "address" => "Kathmandu",
        "email" => "cuteram@gmail.com"
    ),
    array(
        "name" => "Sita",
        "marks" => 77,
        "address" => "Pokhara",
        "email" => "hellosita@gmail.com"
    ),
    array(
        "name" => "Hari",
        "marks" => 66,
        "address" => "Chitwan",
        "email" => "handsomehunk@gmail.com"
    ),
    array(
        "name" => "Gita",
        "marks" => 55,
        "address" => "Pokhara",
        "email" => "cutiepie@gmail.com"
    )
);

// echo $student[2]["email"];
$keys = array_keys($student);

for ($i = 0; $i < count($student); $i++) {
    echo "<br/>";
    foreach ($student[$keys[$i]] as $key => $value) {
        echo $value . "<br/>";
    }
}

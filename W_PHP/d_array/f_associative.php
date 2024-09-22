<?php
$marks = array(
    "Ram" => 56,
    "Sita" => 99,
    "Hari" => 78,
    "Gita" => 55
);

echo "Marks of Ram = " . $marks["Ram"] . "<br/>";
echo "Marks of Sita = " . $marks["Sita"] . "<br/>";
echo "Marks of Hari = " . $marks["Hari"] . "<br/>";
echo "Marks of Gita = " . $marks["Gita"] . "<br/><br/>";

echo "Use of foreach to display the marks of Students for associative array <br/>";
foreach ($marks as $key => $value) {
    echo "The marks of " . $key . " is = " . $value . "<br/>";
}

?>
<?php
$student = array(
    array("Ram", 3, 12),
    array("Sita", 1, 10),
    array("Hari", 4, 11),
    array("Gita", 3, 14)
);

/* echo $student[0][0] . " studies in class " . $student[0][1] . " and " . $student[0][2] . " years old. <br/>";
echo $student[1][0] . " studies in class " . $student[1][1] . " and " . $student[1][2] . " years old. <br/>";
echo $student[2][0] . " studies in class " . $student[2][1] . " and " . $student[2][2] . " years old. <br/>";
echo $student[3][0] . " studies in class " . $student[3][1] . " and " . $student[3][2] . " years old."; */

for ($row = 0; $row < 4; $row++) {
    echo "<h2> Row : $row </h2>";
    echo "<ul";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $student[$row][$col] . "</li>";
    }
    echo "</ul>";
}

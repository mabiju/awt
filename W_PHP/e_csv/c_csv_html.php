<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying csv contents in html table</title>
</head>

<body>
    <table border="1">
        <?php
        $file = fopen("students.csv", "r"); // opens a file
        while (($row = fgetcsv($file)) != false) { // reads the csv file row by row
            echo "<br/>";
            foreach ($row as $col) {
                echo "<td>$col</td>";
            }
            echo "<br/>";
        }
        fclose($file);
        ?>
    </table>
</body>

</html>
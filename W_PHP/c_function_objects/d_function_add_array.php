<?php
function addMarks($num)
{
    $sum = 0;
    foreach ($num as $value) {
        $sum += $value;
    }
    return $sum;
}

$ramMarks = [12, 34, 56, 67, 89];
$sitaMarks = [34, 33, 44, 55, 77];
$sumRam = addMarks($ramMarks);
$sumSita = addMarks($sitaMarks);
echo "Total marks of Ram = $sumRam<br/>";
echo "Total marks of Sita = $sumSita";

?>
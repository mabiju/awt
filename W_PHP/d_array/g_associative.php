<?php
$address = array(
    "Ram" => "Anakantar",
    "Sita" => "Ghopteodar",
    "Laxman" => "Timro dil ma"
);

$address["Hanuman"] = "Hawa";

foreach ($address as $key => $value) {
    echo "$key lives in $value.<br/>";
}
?>
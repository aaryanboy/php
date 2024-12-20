<?php
$person = [
    "Name" => "Brian",
    "Age" => 20,
    "Email" => "Brian123@gmail.com"
];
echo "Details:<br>";
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
?>

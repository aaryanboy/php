<?php
$password = "Password123!";
$passwordPattern = "/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[\W_]).{8,}$/";

if (preg_match($passwordPattern, $password)) {
    echo "Valid password format.\n";
} else {
    echo "Invalid password format.\n";
}
?>

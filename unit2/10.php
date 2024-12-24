<?php
$email = "aryan123@gmail.com";

$emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

if (preg_match($emailPattern, $email)) {
    echo "Valid email format.\n";
} else {
    echo "Invalid email format.\n";
}
?>

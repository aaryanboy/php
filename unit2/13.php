<?php
$texts = [
    "Hello, my email is aryan123@gmail.com.",
    "You can also contact me at boy12a@website.org.",
    "This is not an email: sdarttta.com."
];
$emailPattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/";
preg_match_all($emailPattern, implode(" ", $texts), $matches);
print_r($matches[0]);
?>

<?php
$texts = [
    "Hello, my email is a1@gmail.com.",
    "You can also contact me at a@website.org.",
    "This is not an email: drake.com."
];
$emailPattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/";
preg_match_all($emailPattern, implode(" ", $texts), $matches);
print_r($matches[0]);
?>

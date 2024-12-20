<?php
session_start();

$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'johndoe@example.com';
$_SESSION['last_activity'] = time(); 

echo "Session variables are set.<br>";
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";
?>

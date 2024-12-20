<?php
session_start();

unset($_SESSION['username']);
echo "Session variable 'username' has been destroyed.<br>";

session_unset();   
session_destroy(); 

echo "Session has been destroyed.";
?>

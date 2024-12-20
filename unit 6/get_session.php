<?php

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['email'])) {
    echo "Session variables are set.<br>";
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
} else {
    echo "Session variables are not set.<br>";
}
?>

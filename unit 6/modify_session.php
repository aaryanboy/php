<?php

session_start();

if(isset($_SESSION['username'])) {
    $_SESSION['username'] = 'JaneDoe'; 
    echo "Username has been updated to: " . $_SESSION['username'] . "<br>";
} else {
    echo "Session variable 'username' is not set.<br>";
}
?>

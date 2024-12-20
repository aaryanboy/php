<?php

session_start();

$timeout_duration = 300;


if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout_duration)) {
    session_unset();     
    session_destroy();   
    echo "Session has expired. You have been logged out.";
} else {
    $_SESSION['last_activity'] = time();
    echo "Session is active.<br>";
}
?>

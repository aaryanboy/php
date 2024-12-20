<?php
$host = 'localhost'; 
$user = 'root';       
$password = '';       
$dbname = 'test_db';  

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}
?>

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'travel_booking';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$travel_date = $_POST['travel_date'];
$number_of_passengers = $_POST['number_of_passengers'];

$sql = "INSERT INTO bookings (name, email, phone, destination, travel_date, number_of_passengers)
        VALUES ('$name', '$email', '$phone', '$destination', '$travel_date', '$number_of_passengers')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

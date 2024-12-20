<?php
$host = "localhost";  
$user = "root";     
$password = "";       
$dbname = "travel_db"; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function sanitizeInput($data) {
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone']);
    $destination = sanitizeInput($_POST['destination']);
    $departure_date = sanitizeInput($_POST['departure_date']);
    $return_date = sanitizeInput($_POST['return_date']);
    $special_requests = sanitizeInput($_POST['special_requests']);

    $stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, destination, departure_date, return_date, special_requests) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $destination, $departure_date, $return_date, $special_requests);
    
    if ($stmt->execute()) {
        echo "<h2>Booking Confirmation</h2>";
        echo "<p><strong>Full Name:</strong> $name</p>";
        echo "<p><strong>Email Address:</strong> $email</p>";
        echo "<p><strong>Phone Number:</strong> $phone</p>";
        echo "<p><strong>Destination:</strong> $destination</p>";
        echo "<p><strong>Departure Date:</strong> $departure_date</p>";
        echo "<p><strong>Return Date:</strong> $return_date</p>";
        echo "<p><strong>Special Requests:</strong> $special_requests</p>";
        echo "<p>Your booking has been successfully confirmed. Thank you for choosing our travel service!</p>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'travel_booking';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Bookings</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Destination</th><th>Travel Date</th><th>Passengers</th><th>Action</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['destination']."</td>
                <td>".$row['travel_date']."</td>
                <td>".$row['number_of_passengers']."</td>
                <td><a href='update_booking.php?id=".$row['id']."'>Edit</a> | <a href='delete_booking.php?id=".$row['id']."'>Delete</a></td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No bookings found.";
}

$conn->close();
?>

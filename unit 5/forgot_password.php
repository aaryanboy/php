<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'login_system';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if email exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Reset password to default
        $new_password = password_hash('pass@123', PASSWORD_DEFAULT);
        $sql = "UPDATE users SET password='$new_password' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            echo "Password has been reset to the default password.";
        } else {
            echo "Error updating password.";
        }
    } else {
        echo "Email not found.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>
    <form action="forgot_password.php" method="POST">
        Email: <input type="email" name="email" required><br>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>

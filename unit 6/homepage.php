<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <h2>Welcome to the Homepage</h2>
    <p>You are logged in as: <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
(logout.php)
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit;
?>

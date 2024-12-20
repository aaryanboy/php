<?php
class Person {
    public $username;
    public $email;
    public $phone;
    public $issue;
    public $comments;

    public function __construct($username, $email, $phone, $issue, $comments) {
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->issue = $issue;
        $this->comments = $comments;
    }
}

$ticketDirectory = 'Ticket/';
if (!is_dir($ticketDirectory)) {
    mkdir($ticketDirectory);
}

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$issue = $_POST['Issue'];
$comments = $_POST['comments'];

$person = new Person($username, $email, $phone, $issue, $comments);

$customerDir = $ticketDirectory . 'customer/' . $username . '/';
if (!is_dir($customerDir)) {
    mkdir($customerDir, 0777, true);  
}

$commentsDir = $customerDir . 'comments/';
$screenshotsDir = $customerDir . 'screenshots/';
if (!is_dir($commentsDir)) mkdir($commentsDir, 0777, true);
if (!is_dir($screenshotsDir)) mkdir($screenshotsDir, 0777, true);

$commentFile = $commentsDir . $username . 'Comments.txt';
file_put_contents($commentFile, $comments);

if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] === UPLOAD_ERR_OK) {
    $fileInfo = pathinfo($_FILES['screenshot']['name']);
   
    if (strtolower($fileInfo['extension']) === 'png') {
        $screenshotFile = $screenshotsDir . $username . 'Screenshot.png';

        if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $screenshotFile)) {
            echo "Ticket created successfully for $username!<br>";
            echo "Your comment and screenshot have been saved.<br>";
        } else {
            echo "Error uploading the screenshot.<br>";
        }
    } else {
        echo "Only .png files are allowed for screenshots.<br>";
    }
} else {
    echo "Error uploading the screenshot.<br>";
}

?>

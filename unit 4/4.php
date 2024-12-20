<?php
$filename = "destination.txt";
if (file_exists($filename)) {
    if (unlink($filename)) {
        echo "File '$filename' deleted successfully.";
    } else {
        echo "Error deleting file '$filename'.";
    }
} else {
    echo "File '$filename' does not exist.";
}
?>

<?php
$sourceFile = "source.txt";
$destinationFile = "destination.txt";

if (!copy($sourceFile, $destinationFile)) {
    echo "Failed to copy file.";
} else {
    echo "File copied successfully.<br>";
}
$additionalContent = "\nThis is appended content.";
$file = fopen($destinationFile, "a");
if ($file) {
    fwrite($file, $additionalContent);
    fclose($file);
    echo "Content appended successfully.<br>";
} else {
    echo "Unable to open destination file for appending.";
}
?>

<?php
$file = fopen("file.txt", "r"); 
if ($file) {
    while (($char = fgetc($file)) !== false) { 
        echo $char;
    }
    fclose($file); 
} else {
    echo "Unable to open the file.";
}
?>

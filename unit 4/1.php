<?php
$file = fopen("file.txt", "r"); 
if ($file) {
    while (($line = fgets($file)) !== false) { 
        echo $line . "<br>";
    }
    fclose($file); 
} else {
    echo "Unable to open the file.";
}

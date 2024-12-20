<?php
$str = "Hello World 123";

// Binary to Hex and vice versa
echo bin2hex($str) . "\n"; 
echo hex2bin("48656c6c6f20576f726c642031323334") . "\n";

// Array conversions
print_r(explode(" ", $str));  
echo implode("-", ["Hello", "World"]) . "\n"; 

// Hashing and parsing
echo md5($str) . "\n";  
parse_str("name=John&age=30", $output);
print_r($output); 

// Formatted output
printf("Name: %s\n", "John");  
fprintf(STDOUT, "Value: %d\n", 42); 
echo sprintf("Total: $%d\n", 100); 

// String position and comparison
echo strpos($str, "World") . "\n"; 
echo strlen($str) . "\n";  

// Case manipulation
echo strtolower($str) . "\n"; 
echo strtoupper($str) . "\n";

// String reversal and wrapping
echo strrev($str) . "\n";
echo wordwrap($str, 5) . "\n";

// First character manipulation
echo lcfirst($str) . "\n"; 
echo ucfirst("hello") . "\n";  
?>

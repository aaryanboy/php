<?php

// a. Function to echo "user defined function"
function fun() {
    echo "User defined function<br>";
}

// b. Function to pass two numbers as arguments and display their sum
function Sum($num1, $num2) {
    $sum = $num1 + $num2;
    echo "The sum of $num1 and $num2 is $sum<br>";
}

// c. Function for call by reference, appending a message to the referenced variable
function appendMessage(&$message) {
    $message .= " - This is an appended message!";
}

// d. Function with a default argument
function greetUser($name = "Guest") {
    echo "Hello, $name! Welcome.<br>";
}

// e. Function to check if a number is prime
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// f. Functions to calculate the area of a circle and a rectangle
function calculateCircleArea($radius) {
    $area = pi() * $radius * $radius;
    echo "The area of a circle with radius $radius is $area<br>";
}

function calculateRectangleArea($length, $width) {
    $area = $length * $width;
    echo "The area of a rectangle with length $length and width $width is $area<br>";
}

// Calling the functions
fun();

Sum(5, 10);

$message = "Original message";
appendMessage($message);
echo "$message<br>";

greetUser(); // Default argument
greetUser("Alice");

$number = 29;
if (isPrime($number)) {
    echo "$number is a prime number.<br>";
} else {
    echo "$number is not a prime number.<br>";
}

calculateCircleArea(7);
calculateRectangleArea(5, 10);

?>

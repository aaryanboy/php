<?php
require_once 'src/Math/Geometry/Circle.php';
require_once 'src/Math/Constants.php';
use Math\Geometry\Circle;
$circle = new Circle(5);
echo "Diameter: " . $circle->diameter() . "\n";
echo "Area: " . $circle->area() . "\n";
?>


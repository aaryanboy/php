<?php
abstract class Vehicle {
    public $make;
    public $model;
    abstract public function getDetails();
}
class Car extends Vehicle {
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
    public function getDetails() {
        return "Car Make: $this->make, Model: $this->model";
    }
}
$car = new Car("Toyota", "Prado");
echo $car->getDetails() . "\n";
?>

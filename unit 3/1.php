<?php
class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function getDetails() {
        return "Car Make: $this->make, Model: $this->model, Year: $this->year";
    }
}
$car = new Car("Toyota", "Camry", 2023);
echo $car->getDetails() . "\n";
?>

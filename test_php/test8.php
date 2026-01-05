<?php
abstract class Vehicle {
    protected $brand;
    protected $year;

    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    abstract public function drive();
}

interface Refuelable {
    public function refuel($fueltype);
}

class Car extends Vehicle implements Refuelable{
    public function drive() {
        echo "Car is Driving ..... Vroom Vroom \n";
    }

    public function refuel($fueltype) {
        echo "Car is Refuelling with $fueltype \n";
    }

}

class Motorcycle extends Vehicle implements Refuelable {
    public function drive() {
        echo "Motorcycle is Driving ....... \n";
    }

    public function refuel($fueltype) {
        echo "Motorcycle is Refuelling with $fueltype \n";
    }
}

$vehicles = [
    new Car("BMW", 2020),
    new Motorcycle("Yamaha", 2019)
];

foreach ($vehicles as $icles) {
    $icles->drive();
    $icles->refuel("Gasoline");
}

?>
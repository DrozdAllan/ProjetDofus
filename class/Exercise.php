<?php

class Car {

    //Constructor
    public function __construct($brand, $make_year) {
        $this->brand = $brand;
        $this->make_year = $make_year;
    }


    public function info() {
        echo 'This car is a ' . $this->make_year . ' ' . $this->brand;
    }

}



$Tuture = new Car('Toyota', 2006);
$Tuture->info();













?>
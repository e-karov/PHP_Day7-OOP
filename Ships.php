<?php
require_once "Vehicles.php";

class Ship extends Vehicle
{
    private $type, $capacity;

    function __construct($new_name, $new_model, $new_makeYear, $new_color, $new_fuelType, $new_type, $new_capacity)
    {
        parent::__construct($new_name, $new_model, $new_makeYear, $new_color, $new_fuelType);
        $this->type = $new_type;
        $this->capacity = $new_capacity;
    }

    public function __getType()
    {
        return $this->type;
    }

    public function __setType($new_type)
    {
        $this->type = $new_type;
        return $this;
    }

    public function __getCapacity()
    {
        return $this->capacity;
    }

    public function __setCapacity($new_capacity)
    {
        $this->capacity = $new_capacity;
        return $this;
    }


    public function printCharacteristics()
    {
        echo "This ship is type {$this->type}, Model - {$this->model} with cpacity of {$this->capacity} and Make-year {$this->makeYear}.<br>";
    }
}

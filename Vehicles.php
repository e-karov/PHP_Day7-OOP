<?php
class Vehicle
{
    public $name, $model, $makeYear, $color, $fuelType;

    public function __construct($new_name, $new_model, $new_makeYear, $new_color, $new_fuelType)
    {
        $this->name = $new_name;
        $this->model = $new_model;
        $this->makeYear = $new_makeYear;
        $this->color = $new_color;
        $this->fuelType = $new_fuelType;
    }

    public function __getName($name)
    {
        if (property_exists($this, $name)) {
            return $this->name;
        }
    }

    public function __setName($name, $new_name)
    {
        if (property_exists($this, $name)) {
            $this->name = $new_name;
        }
        return $this;
    }
    public function __getModel($model)
    {
        if (property_exists($this, $model)) {
            return $this->model;
        }
    }

    public function __setModel($model, $new_model)
    {
        if (property_exists($this, $model)) {
            $this->model = $new_model;
        }
        return $this;
    }

    public function __getMakeYear($makeYear)
    {
        if (property_exists($this, $makeYear)) {
            return $this->makeYear;
        }
    }

    public function _setMakeYear($makeYear, $new_makeYear)
    {
        if (property_exists($this, $makeYear)) {
            $this->makeYear = $new_makeYear;
        }
        return $this;
    }

    public function _getColor($color)
    {
        if (property_exists($this, $color)) {
            return $this->color;
        }
    }

    public function _setColor($color, $new_color)
    {
        if (property_exists($this, $color)) {
            $this->color = $new_color;
        }
        return $this;
    }

    public function _getFuelType($fuelType)
    {
        if (property_exists($this, $fuelType)) {
            return $this->fuelType;
        }
    }

    public function _setFuelType($fuelType, $new_fuelType)
    {
        if (property_exists($this, $fuelType)) {
            $this->fuelType = $new_fuelType;
        }
        return $this;
    }

    public function printName()
    {
        echo  "Name: {$this->name}, Model: {$this->model}<br>";
    }
}

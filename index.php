<?php
require_once "Ships.php";
require_once "Vehicles.php";

$myBicycle = new Vehicle("Bicycle", "Puch", "2001", "Blue", "Cheeseburger&Coffee");
$myCar = new Vehicle("Car", "Citroên CV2", "1978", "", "Black", "Gasoline");
$myAirplane = new Vehicle("Airplane", "Boeing 747 Airliner", "2000", "Grey", "Aviation Kerosene");

echo $myBicycle->printName();
echo $myAirplane->printName();
echo $myCar->printName();

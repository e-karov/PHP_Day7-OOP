<?php
require_once "Ships.php";
require_once "Vehicles.php";

$myBicycle = new Vehicle("Bicycle", "Puch", "2001", "Blue", "Cheeseburger&Coffee");
$myCar = new Vehicle("Car", "Citroên CV2", "1978", "", "Black", "Gasoline");
$myAirplane = new Vehicle("Airplane", "Boeing 747 Airliner", "2000", "Grey", "Aviation Kerosene");

$myBicycle->printName();
$myAirplane->printName();
$myCar->printName();

$passengerShip = new Ship("Tranceatlantic", "'BestBuilt'", "1999", "Red", "Heavy Fuel Oil", "Passenger Ship", "700 Passengers");
$containerShip = new Ship("Heavy Trans", "'Great Carrier'", "2020", "White", "Diesel Oil", "Container Ship", "Panamax");
$oilTanker = new Ship("Ocean Giant", "'Oil Tanker'", "2012", "White", "Heavy Fuel Oil", "Bulk Transport", "Panamax");

$passengerShip->printCharacteristics();
$containerShip->printCharacteristics();
$oilTanker->printCharacteristics();

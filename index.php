<?php

//require
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

// bike creation
$blueBike = new Bicycle("blue", 1);
$blueBike->setNbWheels(2);
var_dump($blueBike);
echo "<br><br>";
$redBike = new Bicycle("red",1);
$redBike->setNbWheels(2);
var_dump($redBike);
echo "<br><br>";


//car creation
$homerSedan = new Car('pink',5,'fuel');
$homerSedan->setNbWheels(4);
var_dump($homerSedan);
echo "<br><br>";
$margeSationWagon = new Car('orange',7,'electric');
$margeSationWagon->setNbWheels(4);
var_dump($margeSationWagon);
echo "<br><br>";

//truck creation
$greenTruck = new Truck('green',2,'electric',50);
$greenTruck->setNbWheels(4);
var_dump($greenTruck);
echo "<br><br>";
$yellowTruck = new Truck('yellow',2,'fuel',50);
$yellowTruck->setNbWheels(4);
var_dump($yellowTruck);

//set speed
$blueBike->setCurrentSpeed(0);
$redBike->setCurrentSpeed(0);
$homerSedan-> setCurrentSpeed(0);
$margeSationWagon-> setCurrentSpeed(0);
$greenTruck-> setCurrentSpeed(0);
$yellowTruck-> setCurrentSpeed(0);

//set energy level
$homerSedan->setEnergyLevel(15);
$margeSationWagon->setEnergyLevel(10);


// Moving bike
echo "<br>";
echo "<h2>Velo bleu: </h2>";
echo $blueBike->forward();
echo '<br> Vitesse du vélo bleu : ' . $blueBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueBike->brake();
echo '<br> Vitesse du vélo bleu : ' . $blueBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueBike->brake();
echo "<br>";
echo "<h2>Velo rouge: </h2>";
echo $redBike->forward();
echo '<br> Vitesse du vélo rouge : ' . $redBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $redBike->brake();
echo '<br> Vitesse du vélo rouge : ' . $redBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $redBike->brake();
echo "<br><br>";

//moving car
echo "<h2>Voiture de homer: </h2>";
echo $homerSedan->start();
echo "<br>";
echo $homerSedan->forward();
echo '<br> Vitesse de la voiture de homer : ' . $homerSedan->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de homer : " . $homerSedan->getEnergyLevel(). '<br>'; */
echo $homerSedan->brake();
echo '<br> Vitesse de la voiture de homer  : ' . $homerSedan->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de homer : " . $homerSedan->getEnergyLevel(). '<br>'; */
echo $homerSedan->brake();
echo "<br>";

echo "<h2>Voiture de marge: </h2>";
echo $margeSationWagon->start();
echo "<br>";
echo $margeSationWagon->forward();
echo '<br> Vitesse de la voiture de marge : ' . $margeSationWagon->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de marge : " . $margeSationWagon->getEnergyLevel(). '<br>'; */
echo $margeSationWagon->brake();
echo '<br> Vitesse de la voiture de marge  : ' . $margeSationWagon->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de marge : " . $margeSationWagon->getEnergyLevel(). '<br>'; */
echo $margeSationWagon->brake();


// filling et moving truck
echo "<h2>Camion vert : </h2>";
echo 'Capacité de stockage du camion : '.$greenTruck->getStorage().' %<br>';
echo $greenTruck->isLoading();
echo "<br>";
echo $greenTruck->start();
echo "<br>";
echo $greenTruck->forward();
echo '<br> Vitesse du camion vert  : ' . $greenTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $greenTruck->brake();
echo '<br> Vitesse du camion vert  : ' . $greenTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $greenTruck->brake();

echo "<h2>Camion jaune : </h2>";
echo 'Capacité de stockage du camion : '.$yellowTruck->getStorage().' %<br>';
echo $yellowTruck->isLoading();
echo "<br>";
echo $yellowTruck->start();
echo "<br>";
echo $yellowTruck->forward();
echo '<br> Vitesse du camion jaune  : ' . $yellowTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $yellowTruck->brake();
echo '<br> Vitesse du camion jaune  : ' . $yellowTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $yellowTruck->brake();
?>
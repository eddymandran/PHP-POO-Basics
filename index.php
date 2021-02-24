<?php

//require
require_once 'Car.php';
require_once 'Bicycle.php';

// bike creation
$blueBike = new Bicycle("blue", 1);
var_dump($blueBike);
echo "<br><br>";
$redBike = new Bicycle("red",1);
var_dump($redBike);
echo "<br><br>";


//car creation
$homerSedan = new Car('pink',5,'gazol');
var_dump($homerSedan);
echo "<br><br>";
$margeSationWagon = new Car('orange',7,'SP95');
var_dump($margeSationWagon);
echo "<br><br>";

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

//set speed
$blueBike->setCurrentSpeed(0);
$redBike->setCurrentSpeed(0);
$homerSedan-> setCurrentSpeed(0);
$margeSationWagon-> setCurrentSpeed(0);

//set energy level
$homerSedan->setEnergyLevel(15);
$margeSationWagon->setEnergyLevel(10);


// Moving bike
echo "<br><br>";
echo $blueBike->forward();
echo '<br> Vitesse du vélo bleu : ' . $blueBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueBike->brake();
echo '<br> Vitesse du vélo bleu : ' . $blueBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueBike->brake();
echo "<br><br>";
echo $redBike->forward();
echo '<br> Vitesse du vélo rouge : ' . $redBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $redBike->brake();
echo '<br> Vitesse du vélo rouge : ' . $redBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $redBike->brake();
echo "<br><br>";

//moving car
echo $homerSedan->start();
echo "<br>";
echo $homerSedan->forward();
echo '<br> Vitesse de la voiture de homer : ' . $homerSedan->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de homer : " . $homerSedan->getEnergyLevel(). '<br>'; */
echo $homerSedan->brake();
echo '<br> Vitesse de la voiture de homer  : ' . $homerSedan->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de homer : " . $homerSedan->getEnergyLevel(). '<br>'; */
echo $homerSedan->brake();
echo "<br><br>";

echo $margeSationWagon->start();
echo "<br>";
echo $margeSationWagon->forward();
echo '<br> Vitesse de la voiture de marge : ' . $margeSationWagon->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de marge : " . $margeSationWagon->getEnergyLevel(). '<br>'; */
echo $margeSationWagon->brake();
echo '<br> Vitesse de la voiture de marge  : ' . $margeSationWagon->getCurrentSpeed() . ' km/h' . '<br>';
/* echo "Niveau d'energie de la voiture de marge : " . $margeSationWagon->getEnergyLevel(). '<br>'; */
echo $margeSationWagon->brake();



?>
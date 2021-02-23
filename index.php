<?php

//require
require_once 'Car.php';
require_once 'Bicycle.php';

// bike creation
$blueBike = new Bicycle("blue");
var_dump($blueBike);
$redBike = new Bicycle("red");
var_dump($redBike);


//car creation
$homerSedan = new Car('pink',5,'gazol');
var_dump($homerSedan);
$margeSationWagon = new Car('orange',7,'SP95');
var_dump($margeSationWagon);

//set speed
$blueBike->setCurrentSpeed(0);
$redBike->setCurrentSpeed(0);
$homerSedan-> setCurrentSpeed(0);
$margeSationWagon-> setCurrentSpeed(0);

//set energy level
$homerSedan->setEnergyLevel(15);
$margeSationWagon->setEnergyLevel(10);


// Moving bike
echo $blueBike->forward();
echo '<br> Vitesse du vélo bleu : ' . $blueBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueBike->brake();
echo '<br> Vitesse du vélo bleu : ' . $blueBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueBike->brake();

echo $redBike->forward();
echo '<br> Vitesse du vélo rouge : ' . $redBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $redBike->brake();
echo '<br> Vitesse du vélo rouge : ' . $redBike->getCurrentSpeed() . ' km/h' . '<br>';
echo $redBike->brake();

//moving car
echo $homerSedan->start();
echo $homerSedan->forward();
echo '<br> Vitesse de la voiture de homer : ' . $homerSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo "<br> Niveau d'energie de la voiture de homer : " . $homerSedan->getEnergyLevel(). '<br>';
echo $homerSedan->brake();
echo '<br> Vitesse de la voiture de homer  : ' . $homerSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo "<br> Niveau d'energie de la voiture de homer : " . $homerSedan->getEnergyLevel(). '<br>';
echo $homerSedan->brake();

echo $margeSationWagon->start();
echo $margeSationWagon->forward();
echo '<br> Vitesse de la voiture de marge : ' . $margeSationWagon->getCurrentSpeed() . ' km/h' . '<br>';
echo "<br> Niveau d'energie de la voiture de marge : " . $margeSationWagon->getEnergyLevel(). '<br>';
echo $margeSationWagon->brake();
echo '<br> Vitesse de la voiture de marge  : ' . $margeSationWagon->getCurrentSpeed() . ' km/h' . '<br>';
echo "<br> Niveau d'energie de la voiture de marge : " . $margeSationWagon->getEnergyLevel(). '<br>';
echo $margeSationWagon->brake();



?>
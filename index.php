<?php

require_once './Bicycle.php';
require_once './cars.php';
$bike = new Bicycle('blue');

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('black');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('white');

$bike->setCurrentSpeed(4);

$homerCar= new Cars('pink', 6, 'petrol');
echo 'la voiture de homer' . ' ' . $homerCar->start();
echo '<br>';
echo $homerCar->forward();
echo '<br> Vitesse de la voiture : ' . $homerCar->setCurrentSpeed(45). $homerCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $homerCar->brake();
echo '<br> Vitesse de la voiture : ' . $homerCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $homerCar->brake();
<?php

require '../src/Car.php';

$car = new Car ('black', 5, 'petrol'); 

$car->setCurrentSpeed('150');
echo $car->getCurrentSpeed();

$car->setEnergyLevel('50');
echo $car->getEnergyLevel();

echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

var_dump($car);


<?php

require_once '../src/Bicycle.php';

$bike = new Bicycle("blue");

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
var_dump($bike);

$rockrider = new Bicycle("yellow");
var_dump($rockrider);

$tornado = new Bicycle("black");
$tornado->forward();
var_dump($tornado);

$bike->setColor('blue');
$bike->getColor();

$bike->setCurrentSpeed('15');
$bike->getCurrentSpeed();

var_dump($bike);

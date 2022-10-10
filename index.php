<?php

require_once './Bicycle.php';
require_once './car.php';
require_once './Truck.php';


$pwouette = new Truck('blue', 2, 'fuel', 200);
$pwouette->setCharge(250);
echo $pwouette->isFull($pwouette->getCharge());

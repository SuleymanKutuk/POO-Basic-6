<?php 

require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Bike.php';
require_once 'LightableInterface.php';
require_once 'Speedometer.php';





echo Speedometer::convertKm(10)  ."<br>";



$car = new Car('blue', 5, 'fuel');
echo $car->switchOn();


$bicycle = new Bike('red', 1);
$bicycle->setCurrentSpeed(5);
echo $bicycle->switchOn();


$bikes = new Bike('red', 1);
$bikes->setCurrentSpeed(10);
echo $bikes->switchOn();





try{
    $car->start();
}catch(Exception $e){
    echo $e->getMessage();
    $car->setParkBrake();
}finally{
    echo "Ma voiture roule comme un donut.";
}
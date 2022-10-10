<?php
// Bike
require_once 'Bicycle.php';
$bicycle = new bicycle('blue', 1);
    echo $bicycle->forward();
    var_dump($bicycle);

// $bike->setCurrentSpeed(0);
// $bike->setNbSeats(1);
// $bike->setnbWheels(2);

// // Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> <br>';

require_once 'car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
// $car = new Car( 'blue', 4, 'diesel');
// echo $car->start();
// echo $car->forward();
// echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
// echo $car->brake();
// echo '<br> Vitesse du la voiture : ' . $car->getCurrentSpeed().' km/h' . '<br>';

require_once 'vehicle.php';

require_once 'truck.php';
$truck= new truck('green', 4, 'fuel', 1);
echo $truck->forward();
echo $truck->brake();
var_dump($truck);
echo '<br>';
echo $truck->load();



?>
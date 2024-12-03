<?php
require_once "Vehiculo.php";
require_once "Moto.php";
require_once "Coche.php";
require_once "Camion.php";
require_once "VehiculoElectrico.php";




$coche = new Coche("Seat", "Cupra ", "Rojo", 5);

echo $coche->obtenerInformacion() . PHP_EOL;

echo $coche->mover() . PHP_EOL;
echo $coche->detener() . PHP_EOL;



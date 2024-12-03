<?php

require_once "Vehiculo.php";
require_once "Moto.php";
require_once "Coche.php";
require_once "Camion.php";
require_once "VehiculoElectrico.php";



class Concesionario {

    public function mostrarVehiculo(Vehiculo $vehiculo) {
        echo $vehiculo->obtenerInformacion() . PHP_EOL;
    }
    



}


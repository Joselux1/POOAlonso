<?php

require_once "Vehiculo.php";

class Camion extends Vehiculo{


private  float  $capacidadCarga;



public function __construct(string $marca, string $modelo, $color ,$capacidadCarga) {
    parent::__construct($marca, $modelo , $color );
    $this->capacidadCarga = $capacidadCarga;
}

 public  function  setNumPuertas (float $capacidadCarga){
       $this -> capacidadCarga = $capacidadCarga;

 }
 public  function  getNumPuertas (float $capacidadCarga){
    $this -> capacidadCarga = $capacidadCarga;

}
 
 public function mover(): string {
    return "El camion  {$this->marca} {$this->modelo} está moviendose.";
}

public function detener(): string {
    return "El camion  {$this->marca} {$this->modelo} está deteniendose.";
}


public function obtenerInformacion(): string {
    return parent::obtenerInformacion() . ", capacidadCarga: {$this->capacidadCarga} kg";
}

  
}


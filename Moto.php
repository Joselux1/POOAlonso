<?php

require_once "Vehiculo.php";

class Moto extends Vehiculo{

    private int  $cilindrada;


    public  function  setCilindrada (int $cilindrada){
        $this -> cilindrada = $cilindrada;

  }
  public  function  getCilindrada (int $cilindrada){
    $this -> cilindrada = $cilindrada;

}

  
public function mover(): string {
    return "la moto {$this->marca} {$this->modelo} está moviendose.";
}

public function detener(): string {
    return "La moto {$this->marca} {$this->modelo} está deteniendose.";
}


public function obtenerInformacion(): string {
    return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada} ";
}


 





}

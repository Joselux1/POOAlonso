<?php

require_once "Vehiculo.php";
final class Bicicleta extends Vehiculo{



     public function __construct(string $marca, string $modelo, $color ) {
        parent::__construct($marca, $modelo , $color );
       
    }
    
   public function pedalear(): string {
    return "esta bicicleta {$this->marca} {$this->modelo} está pedaleandose.";
    }
    
   public function mover(): string {
    return "esta bicicleta {$this->marca} {$this->modelo} está moviendose.";
    }

    public function detener(): string {
      return "esta bicicleta {$this->marca} {$this->modelo} está deteniendose.";
      }



}

<?php



class Coche extends Vehiculo{

    
   private int $numeroPuertas;

   
   public function __construct(string $marca, string $modelo, $color ,$numeroPuertas) {
      parent::__construct($marca, $modelo , $color );
      $this->numeroPuertas = $numeroPuertas;
  }

   public  function  setNumPuertas (int $numeroPuertas){
         $this -> numeroPuertas = $numeroPuertas;

   }
   public  function  getNumPuertas (int $numeroPuertas){
      $this -> numeroPuertas = $numeroPuertas;

}
   
   public function mover(): string {
      return "El Coche {$this->marca} {$this->modelo} está moviendose.<br>";
  }

  public function detener(): string {
      return "El Coche {$this->marca} {$this->modelo} está deteniendose.";
  }


  public function obtenerInformacion(): string {
      return parent::obtenerInformacion() . ", NumeroPuertas: {$this->numeroPuertas} .<br> ";
  }

  
 
}

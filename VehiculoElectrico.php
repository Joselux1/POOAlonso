<?php


require_once "Vehiculo.php";

 interface VehiculoElectrico{
    function cargarBateria(): string;
    function estadoBateria(): string;


 }
 
 class Tesla implements VehiculoElectrico {

    public function cargarBateria(): string{
    
    return  "se esta cargando la bateria";

    }
    public  function estadoBateria(): string{

      return " el estado de la bateria es de 50%";
    }


 }
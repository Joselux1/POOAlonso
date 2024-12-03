<?php
abstract class Vehiculo {
    protected string $marca;
    protected string $modelo;
    protected string $color;
 
 
    public function __construct(string $marca, string $modelo, string $color = "Negro") {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }
 
 
    abstract public function mover():string;
    abstract public function detener():string;
 
 
    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
    }
     // Método mágico __toString
     public function __toString(): string {
        return $this->obtenerInformacion();
    }

    // Método mágico __get
    public function __get(string $nombre) {
        if (property_exists($this, $nombre)) {
            return $this->$nombre;
        }
        throw new Exception("La propiedad '$nombre' no existe.");
    }


    

}
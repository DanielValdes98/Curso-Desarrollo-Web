<?php

use Automovil as GlobalAutomovil;
use Transporte as GlobalTransporte;
use TransportInterface as GlobalTransportInterface;

include 'includes/header.php';

interface TransportInterface {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransportInterface { 
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona(s)";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransportInterface {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo() : string {
        return "El automovil tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona(s) y el color es " . $this->color;
    }

    public function getColor() : string {
        return "El automovil es de color " . $this->color;
    }
}


$carro = new Automovil(4, 5, 'rojo');
echo $carro->getInfo();
echo $carro->getColor();
echo "<hr>";

echo "<pre>";
var_dump($tranporte = new Transporte(8, 20));
var_dump($carro = new Automovil(4, 5, 'rojo'));
echo "</pre>";

echo $tranporte->getInfo();
echo "<hr>";



include 'includes/footer.php';
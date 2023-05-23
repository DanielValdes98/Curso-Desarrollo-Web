<?php include 'includes/header.php';

abstract class Transporte { // No instancia
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

// HERENCIA: extends [Clase a heredar]

class Bicicleta extends Transporte {
    
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona(s), la transmisión es " . $this->transmision;
    }

}



echo "<hr>";

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta -> getInfo();
echo $bicicleta -> getRuedas();

echo "<hr>";

$automovil = new Automovil(4, 5, 'manual');
echo $automovil -> getInfo();

include 'includes/footer.php';
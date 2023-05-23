<?php 
declare ( strict_types = 1 );

include 'includes/header.php';

// Definir una clase: Video 343 en adelante

// POO en PHP 8: (Para otras versiones se define diferente)


// ENCAPSULACIÓN
class Producto {

    // public: se puede acceder y modificar en cualquier lugar (clase y objeto)
    // protected: se puede acceder/modificar unicamente en la clase
    // private: solo miembros de la misma clase pueden acceder a él


    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {   
    }

    public function mostrarProducto() : void { // this: hace referenciaa los atributos de los objetos creado en ESTA clase
        echo "El producto es: " . $this->nombre . "y su precio es de " . $this->precio;
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('POCO F3', 1580000, true);
// $producto -> mostrarProducto();
echo $producto -> getNombre();
$producto->setNombre('Nuevo POCO F3');
echo $producto -> getNombre();

//$producto->nombre = "Nuevo POCO F3"; // Asi tan facil puedo modificar el atributo de un objeto si no lo encapsulamos

// echo "<pre>";
// var_dump($producto);
// echo "</pre>";

$producto2 = new Producto('XIAOMI X4 PRO', 1480000, true);
// $producto2 -> mostrarProducto();
echo $producto2 -> getNombre();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";


include 'includes/footer.php';
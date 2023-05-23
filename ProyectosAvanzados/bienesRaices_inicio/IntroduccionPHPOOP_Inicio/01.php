<?php 
declare ( strict_types = 1 );

include 'includes/header.php';

// Definir una clase: Video 343 en adelante

// POO en PHP 8
class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {   
    }

    public function mostrarProducto() { // this: hace referenciaa los atributos de los objetos creado en ESTA clase
        echo "El producto es: " . $this->nombre . "y su precio es de " . $this->precio;
    }
}

$producto = new Producto('POCO F3', 1580000, true);
$producto -> mostrarProducto();

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('XIAOMI X4 PRO', 1480000, true);
$producto2 -> mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';
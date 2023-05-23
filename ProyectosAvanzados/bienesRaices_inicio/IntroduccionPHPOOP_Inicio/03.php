<?php 
// Video 347 

declare ( strict_types = 1 );

use Producto as GlobalProducto;

include 'includes/header.php';

// METODOS ESTATICOS: 

class Producto {

    public $imagen;
    public static $imagenPlaceholder = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {  
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto() {
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto() {
        echo "Obtenemos datos el producto... ";
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

echo Producto::obtenerProducto();
echo Producto::obtenerImagenProducto();


$producto = new Producto('POCO F3', 1580000, true, 'XIOMI.jpg');

echo $producto -> obtenerImagenProducto();

$producto -> getNombre();
$producto->setNombre('Nuevo POCO F3');
$producto -> getNombre();

echo "<pre>";
var_dump($producto);
echo "</pre>";



include 'includes/footer.php';
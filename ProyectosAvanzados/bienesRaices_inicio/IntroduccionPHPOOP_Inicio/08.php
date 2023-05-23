<?php include 'includes/header.php';

// Video 356: Se quita el autoload y se usa composer

require 'vendor/autoload.php';

// Incluir las otras clases
// require 'clases/Clientes.php';
// require 'clases/Detalles.php';


// Con esta sintaxis se puede eliminar el App\ de abajo:
use App\Clientes;
use App\Detalles;


// function mi_autoload($clase) {
//     // echo $clase;
//     $partes = explode('\\', $clase);
//     // var_dump($partes[1]);

//     require __DIR__ . '/clases/' . $partes[1] . '.php';
// }

// spl_autoload_register('mi_autoload');

// class Clientes {
//     public function __construct()
//     {
//         echo "Desde 08.php que contiene los clientes";
//     }
// }

// Con el autoload va buscando todas las clases segun se vayan importando automaticamente

$detalles = new App\Detalles();
$clientes = new App\Clientes();
// $clientes2 = new Clientes();


include 'includes/footer.php';
<?php include 'includes/header.php';

$nombre = "Daniel";
$_nombre = "Daniel";

echo $nombre;
var_dump($nombre); // Imprime tipo de dato, longitud y valor

define('constante', "Este es el valor de la constante"); // Indicativo de que es una constante
echo constante;

const constante2 = "Hola 2";
echo constante2;

$nombreCliente = "Pedro";


include 'includes/footer.php';
<?php include 'includes/header.php';


// in_array: Buscar elementos en un arreglo
$carrito = ['tablet','television','laptop'];

var_dump( in_array('tablet',$carrito) );
var_dump( in_array('audifonos', $carrito));

// Ordenar elementos de un arreglo:
$numeros = array(1,2,3,4,5,6);

sort($numeros); // Ordena de menor a mayor
rsort($numeros); // Ordena de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// ----------------------------------------------

$cliente = array(
    'nombre' => 'Daniel',
    'tipo' => 'Premium',
    'saldo' => 200
);

sort($cliente); // Ordena por valores, primero mostrando los numeros y luego por strings en orden alfabetico
asort($cliente); // Ordena por valores (Z primero)
ksort($cliente); // Ordena por orden alfabetico
krsort($cliente); // Ordena de la Z a la A.

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
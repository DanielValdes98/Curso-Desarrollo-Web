<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Laptop'];

// Util para los contenidos de un array:
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento de un array:
echo $carrito[1];

// Añade un elemento en la posicion 3:
$carrito[3] = 'Nuevo producto';

// Añadir un elemento nuevo al final de array
array_push($carrito, 'Audifonos');

// Añadir al inicio...
array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";


// OTRA FORMA DE CREAR UN ARREGLO:
$clientes = array('Cliente', 'Cliente2', 'Cliente3');

echo "<pre>";
var_dump($clientes);
echo "</pre>";


include 'includes/footer.php';
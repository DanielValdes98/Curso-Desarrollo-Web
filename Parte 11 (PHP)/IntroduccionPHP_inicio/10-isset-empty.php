<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Daniel','Jennifer','Juana');

$cliente = [
    'nombre' => 'Daniel',
    'saldo' => 500
];

//Empty: Para saber si un arreglo esta vacio o no
var_dump( empty($clientes) );
var_dump( empty($clientes3) );


// Isset: Revisa si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump( isset($clientes3));
var_dump( isset($clientes4) );

//Permite revisar si una propiedad de un arreglo asociativo
echo "<br>";
var_dump( isset($cliente['nombre']) );
var_dump( isset($cliente['codigo']) );

include 'includes/footer.php';
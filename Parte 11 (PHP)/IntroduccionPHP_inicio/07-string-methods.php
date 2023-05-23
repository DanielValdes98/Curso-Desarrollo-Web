<?php include 'includes/header.php';

$nombreCliente = "Daniel Valdes";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo $texto;

// Convertirlo a mayusculas
echo strtoupper($nombreCliente);

// Convertirlo en minisculas
echo strtolower($nombreCliente);

$mail1 = "correo@usc.edu";
$mail2 = "CORREO@usc.edu";

var_dump(strtolower($mail1) === strtolower($mail2));

echo str_replace('Daniel', 'D', $nombreCliente);

// Revisar si un string existe o no, te da la posicion
echo strpos($nombreCliente, "Valdes");

// Concatenar 
$tipoCliente = "Premium";
echo "<br>";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;

// No es un template string, pero actua muy similar que en JS (ora forma de hacer la concatenacion):
echo "<br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';
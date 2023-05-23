<?php include 'includes/header.php';

$cliente = [
    'nombre' => "Daniel",
    'saldo'=> 200,
    'informacion'=> [
        'tipo' => 'premium', 
        'disponible'=> 100
    ]

];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Para acceder a los elementos de un array asociativo:
echo $cliente['nombre'];
echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 10276993;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
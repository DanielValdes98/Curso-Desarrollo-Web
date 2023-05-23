<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'tablet',
        'precio' => 1200,
        'disponible' => true
    ], 
    [
        'nombre' => 'televion 24"',
        'precio' => 1500,
        'disponible' => true
    ], 
    [
        'nombre' => 'monitor curvo',
        'precio' => 2000,
        'disponible' => false
    ]
];

echo '<pre>';
var_dump($productos);

$json = json_encode($productos);
var_dump($json);

$json_array = json_decode($json);
var_dump($json_array);



echo '</pre>';



include 'includes/footer.php';
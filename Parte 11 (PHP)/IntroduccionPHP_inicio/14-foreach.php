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

foreach ($productos as $producto) { ?>

    <li>
        <p> Producto: <?php echo $producto['nombre'] ?> </p>
        <p> Precio: $<?php echo $producto['precio'] ?> </p>
        <!-- OPERADOR TERNARIO: -->
        <p> <?php echo ( $producto['disponible'] ? 'Disponible' : 'No disponible' ); ?> </p>
        
        <!-- ESTE CODIGO DE ABAJO HACE LO MISMO QUE EL OPERADOR TERNARIO (LINEA DE ARRIBA): -->
        <?php
            if($producto['disponible']) {
                echo "<p> Disponible </p>";
            } else {
                echo "<p> No disponible </p>";
            }
        ?>

    </li>

    <?php

    echo '<pre>';
    var_dump($producto);
    echo '</pre';
}

include 'includes/footer.php';
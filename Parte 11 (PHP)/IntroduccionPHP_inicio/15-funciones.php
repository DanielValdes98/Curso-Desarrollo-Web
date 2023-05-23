<?php 
// Arroja errores de tipado antes de ejecutar el codigo
declare(strict_types=1); 
include 'includes/header.php';

function sumar(int $a = 0, int $b = 0) {
    echo $a;
    echo $a + $b;
}

// Parametros nombrados: Cambia el orden de los parametros que se le asigna a la funcion
sumar(b: 2, a: 5);
sumar(a: 8, b: 4);



include 'includes/footer.php';
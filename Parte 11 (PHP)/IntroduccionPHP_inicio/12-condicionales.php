<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

// or (||) and (&&)
if($autenticado && $admin) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'Usuario incorrecto';
}

$cliente = [
    'nombre' => 'Daniel',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

if( !empty($cliente) ) {
    echo '<br>';
    echo 'El arreglo de cliente no esta vacio';
    
    if($cliente['saldo'] > 0) {
        echo '<br>';
        echo "Admitido. El saldo disponible es de {$cliente['saldo']}";
    } else {
        echo '<br>';
        echo 'No hay salfo suficiente';
    }
}


// else if
if($cliente['saldo'] > 0 ) {
    echo '<br>';
    echo 'Tiene saldo disponible';
} else if($cliente['informacion']['tipo'] === 'premium') {
    echo '<br>';
    echo 'El cliente es premium';
} else {
    echo '<br>';
    echo 'No se ha definido';
}

$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo '<br>';
        echo "PHP, un excelente lenguaje";
        break;

    default: 
        echo '<br>';
        echo 'Algun lenguaje que no se cual es';
        break;
}


include 'includes/footer.php';
<?php include 'includes/header.php';

// While
$i = 200;

while($i < 10) {
    echo $i . '<br>';
    $i++;
}

echo "<br>";

// Do while
$j = 150;

do {
    echo $j . '<br>';
    $j++;
} while ($j < 10);

// For 
for ($c = 1; $c < 50; $c++) {

    if ($c % 3 === 0 && $c % 5 === 0) {
        echo $c . "- Fizz buzz <br/>";
    }
    elseif($c % 3 === 0) {
        echo $c . "- Fizz <br/>";
    }
    else if ($c % 5 === 0) {
        echo $c . "- Buzz <br/>";
    } else {
        echo $c . '<br/>';
    }

}

// For Each
$clientes = array('Pedro','Juan','Karen');

foreach( $clientes as $cliente ) {
    echo $cliente . '<br/>';
}

// OTRO EJEMPLO CON EL FOR EACH:
$persona = [
    'nombre' => 'Daniel',
    'saldo' => 250,
    'tipo' => 'premium'
];

foreach( $persona as $key => $valor ):
    echo $key . '-' . $valor . '<br/>';
endforeach;


include 'includes/footer.php';
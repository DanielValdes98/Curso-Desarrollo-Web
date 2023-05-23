<?php include 'includes/header.php';

// Conectar a la BD con MySqli en POO:

$db = new mysqli('localhost', 'root', 'root', 'bienesraices_crud');

// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

// SENTENCIAS PREPARADAS: VIDEO 357
// Lo preparamos: De esta forma esta más protegido que usando $resultado->fetch_assoc()
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

// Creamos la variable
$stmt->bind_result($titulo, $imagen);

// Aignamos el resultado
// $stmt->fetch(); // Se comenta para que el while de abajo funcione

while($stmt->fetch()):
    var_dump($titulo);
endwhile;

// Imprimimos el resultado
var_dump($titulo);
var_dump($imagen);

// while($row = $resultado->fetch_assoc()):
//     var_dump($row);
// endwhile;

// var_dump($resultado->fetch_assoc());

include 'includes/footer.php';
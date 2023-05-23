<?php include 'includes/header.php';
// VIDEO 358
// Conectar a la BD con PDO: Soporta hasta 12 tipos de bases de datos
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', 'root');

// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// obtener los resultados
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC );

// Iterar
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
endforeach;          

echo "<pre>";
var_dump($resultado);
echo "</pre>";

include 'includes/footer.php';
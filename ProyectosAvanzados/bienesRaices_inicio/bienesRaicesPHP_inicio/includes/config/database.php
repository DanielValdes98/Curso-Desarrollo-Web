<?php

function conectarDB() {
    $db = new mysqli('localhost','root','root','bienesraices_crud');
    // mysqli_set_charset($db, 'utf8');
    // $db -> set_charset("utf8");
    // "ALTER DATABASE $db CHARACTER SET utf8 COLLATE utf8_general_ci;";


    if(!$db) {
        echo "No se pudo conectar a la DB";
        exit;
    }
    return $db; 
}
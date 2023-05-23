<?php

$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

if(!$db) { // si db esta vacio
    echo 'Error en la conexion';
    exit;
} 
// echo 'Conexion correcta';


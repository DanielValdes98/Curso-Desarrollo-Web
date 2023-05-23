<?php 
    //Importar la conexion
    require "includes/app.php";
    $db = conectarDB();

    //Crear un email y password
    $email = "correo@correo.com";
    $password = "daniel123";

    $passwordHash = password_hash($password, PASSWORD_DEFAULT); //PASSWORD_BCRYPT: Es otra forma, tambien funciona

    // var_dump($passwordHash);

    //Query para crear el usuario
    $query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}'); ";
    echo $query;

    //exit;
    
    // Agregarlo a la base de datos
    mysqli_query($db, $query);

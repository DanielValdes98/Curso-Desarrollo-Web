<?php

    session_start();

    $_SESSION = [];  //session_unset(); --> Otra forma de hacerlo, destruye la sesion

    // var_dump($_SESSION);

    header('Location: /');


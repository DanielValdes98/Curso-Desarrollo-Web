<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string|int { // Se declara el tipo de dato que vamos a retornar con los : tipoDeDato // Para echo se pone : void // Posiblemente se va a retonar un string se pone : ?string // String o int se pone : string|int
    if($autenticado) {
        return 'El usuario ha sido autenticado';
    } else {
        return 'El usuario no ha sido autenticado';
    }
}

$usuario = usuarioAutenticado(false);

echo $usuario;



include 'includes/footer.php';
<?php

// Incluye el header y la BD
require 'includes/app.php';

$db = conectarDB();

// Autenticar el usuario

$errores = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST);

    // VALIDAMOS AQUI EN EL BACKEND QUE SÍ SEA UN EMAIL:
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(!$email) {
        $errores[] = "El email es obligatorio o no es válido";
    }

    if (!$password) {
        $errores[] = "El password es obligatorio o no es válido";
    }

    if(empty($errores)) {

        // Revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);

        // var_dump($resultado);

        if( $resultado->num_rows ) {
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            // var_dump($usuario['password']);
            // var_dump($password);


            // Verificar si el password es correcto o no
            $auth = password_verify ($password, $usuario['password']);

            // var_dump($auth);
            // var_dump($usuario['password']);
            // var_dump($password);

            if($auth) {
                // El usuario esta autenticado
                session_start();

                // Llenar el arreglo de la sesion
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');


            } else {
                $errores[] = "El password es incorrecto";
            }

        } else {
            $errores[] = "El usuario no existe";
        }
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";
}



incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sesión</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?> 
        </div>
    <?php endforeach; ?>

    <form method="POST" class="formulario" novalidate> <!-- novalidate: con esto no valida, primero quitar los required -->
        <fieldset>
            <legend>Email y password</legend>

            <label for="email">Email</label>
            <input type="email" name='email' placeholder="Tu Email" id="email" required>

            <label for="password">Password</label>
            <input type="password" name='password' placeholder="Tu password" id="password" required>

        </fieldset>

        <input type="submit" value="Iniciar sesión" class="boton boton-verde">
    </form>
</main>

<?php incluirTemplate('footer'); ?>
<?php

    require '../../includes/funciones.php';
    $auth = estadoAutenticado();

    // if(!$auth) {
    //     header('Location: /');
    // }

    // VALIDAR LA URL POR ID VÁLIDO
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }


    require '../../includes/config/database.php';
    $db = conectarDB();

    // OBTENER LOS DATOS DE LA PROPIEDAD
    $consulta = "SELECT * FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $consulta);
    $propiedad = mysqli_fetch_assoc($resultado);


    // CONSULTAR PARA OBTENER LOS VENDEDORES
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensaje de errores
    $errores = [];

    $titulo = $propiedad['titulo'];
    $precio = $propiedad['precio'];
    $descripcion = $propiedad['descripcion'];
    $habitaciones = $propiedad['habitaciones'];
    $wc = $propiedad['wc'];
    $estacionamiento = $propiedad['estacionamiento'];
    $vendedorId = $propiedad['vendedorId'];
    $imagenPropiedad = $propiedad['imagen'];
    
    // Ejecutar el código después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>"; 
        
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "</pre>"; 


        $titulo = mysqli_real_escape_string($db, $_POST['titulo'] );
        $precio = mysqli_real_escape_string($db, $_POST['precio'] );
        $descripcion = mysqli_real_escape_string($db, $_POST['descripcion'] );
        $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones'] );
        $wc = mysqli_real_escape_string($db, $_POST['wc'] );
        $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento'] );
        $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor'] );
        $creado = date('Y/m/d');

        // Asignar files hacia una variable:
        $imagen = $_FILES['imagen'];

        // var_dump($imagen['name']);

        // exit;

        // if(isset($_POST['vendedorId'])) {
        //     $vendedorId = $_POST['vendedorId'];
        // }

        if(!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }
        
        if(!$precio) {
            $errores[] = "El precio es obligatorio";
        }
        
        if( strlen( $descripcion ) < 50 ) {
            $errores[] = "La descripción es obligatorio y debe contener mínimo 50 caracteres";
        }

        if(!$habitaciones) {
            $errores[] = "Las habitaciones son obligatorios";
        }

        if(!$wc) {
            $errores[] = "Los baños son obligatorios";
        }

        if(!$estacionamiento) {
            $errores[] = "El estacionamiento es obligatorio";
        }

        if(!$vendedorId) {
            $errores[] = "Elige un vendedor";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";  
        
        // if(!$imagen['name'] || $imagen['error'] ) {
        //     $errores[] = 'No se insertó ninguna imagen';
        // }

        // Validar por tamaño (2 mb max)
        $medida = 2000 * 1000;
        if($imagen['size'] > $medida) {
            $errores[] = 'La imagen supera los 20MB, es muy pesada';
        }


        // REVISAR QUE EL ARRAY DE ERRORES ESTÉ VACIO
        if(empty($errores)) {

            /** SUBIDA DE ARCHIVOS */

            // // Crear carpeta
            $carpetaImagenes = '../../imagenes/';
            
            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';

            if($imagen['name']) {
                // Eliminar la imagen previa

                unlink($carpetaImagenes . $propiedad['imagen']);

                // Generar un nombre unico: con md5 se hashea, que es tomar una entrada y convertirla para que se llame diferente
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";
                // var_dump($nombreImagen);

                // Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);
            } else {
                $nombreImagen = $propiedad['imagen'];
            }



            // exit;

            // INSERTAR EN LA BASE DE DATOS:
            $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', 
                habitaciones = ${habitaciones}, wc = ${wc}, estacionamiento = ${estacionamiento}, vendedorId = ${vendedorId} WHERE id = ${id} ";

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al usuario, directamente a la pagina principal:
                header('Location: /admin?resultado=2');
            }
        }

    }

    // require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <!-- action: Indica a donde se van a enviar todos los datos  -->
        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name = "precio" placeholder="Precio propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" alt="imagen de la propiedad" class="imagen-small" >
                
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
            <legend>Informaciòn de la propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones"  name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="5" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            </fieldset>

            <!-- <?php //var_dump($resultado) ?> -->

            <fieldset>
            <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="" >-- Seleccione un vendedor --</option>
                    <!-- <option value="1">Daniel</option>
                    <option value="2">Jennifer</option> -->
                    <?php while ($vendedor = mysqli_fetch_assoc($resultado) ): ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> 
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar propiedad" class="boton boton-verde">

        </form>
    </main>

<?php incluirTemplate('footer'); ?>
<?php

    require '../includes/app.php';
    estadoAutenticado();

    use App\Propiedad;

    // Implementar metodo para obtener todas las propiedades
    $propiedades = Propiedad::all();

    // Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null; // Si no existe 'resultado le asigna un valor null'

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if($id) {

            // Eliminar el archivo
            $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);
            $propiedad = mysqli_fetch_assoc($resultado);

            // var_dump($propiedad);
            // exit;

            unlink('../imagenes/' . $propiedad['imagen']);


            // Eliminar la propiedad
            $query = "DELETE FROM propiedades WHERE id = ${id}";
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                header('Location: /admin?resultado=3');
            }
        }
    }
    
    // Incluye un template
    // require '../includes/funciones.php';
    incluirTemplate('header');
?>

    
    <main class="contenedor seccion ">            

        <h1>ADMINISTRADOR DE BIENES RAICES</h1>
        <?php if( intval( $resultado ) === 1):   ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php elseif(intval ($resultado) === 2): ?>
            <p class="alerta exito">Anuncio actualizado correctamente</p>
        <?php elseif(intval ($resultado) === 3): ?>
            <p class="alerta exito">Anuncio eliminado correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva propiedad</a>


        <table class="propiedades">
            <thead>                
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            <?php while( $propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td> <?php echo $propiedad['id']; ?> </td>
                    <td> <?php echo $propiedad['titulo']; ?> </td>
                    <td><img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen anuncio" class="imagen-tabla"></td>
                    <td>$ <?php echo $propiedad['precio']; ?> </td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>" >
                            <input type = "submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody> <!-- Mostrar los resultados -->
        </table>
    </main>

<?php 

    // Cerrar la conexion
    mysqli_close($db);


    incluirTemplate('footer'); 
?>
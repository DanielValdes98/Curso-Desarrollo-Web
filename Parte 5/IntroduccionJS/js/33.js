function obtenerEmpleados() {
    
    const archivo = 'empleados.json';

    fetch(archivo) // Aplica fecth API al archivo
        .then( resultado => { // Entonces vamos obtener un resultado
            return resultado.json(); // Obtenemos el resultado en formato JSON
        }) 
        .then( datos => { // Entonces accedemos a los datos del resultado
            console.log(datos.empleados);

            const { empleados } = datos;
            //console.log(empleados);

            empleados.forEach(empleado => {
                //console.log(empleado);
                console.log(empleado.id);
                console.log(empleado.nombre);
                console.log(empleado.puesto);

                document.querySelector('.contenido').textContent = empleado.nombre;
            })
        })
}

obtenerEmpleados();

// ----------------------------------------------------------

// Forma más corta de hacer lo de arriba:
async function obtenerEmpleados2() {

    const archivo2 = 'empleados.json';

    const resultado2 = await fetch(archivo2);
    const datos = await resultado2.json();
    console.log(datos);

}

obtenerEmpleados2();


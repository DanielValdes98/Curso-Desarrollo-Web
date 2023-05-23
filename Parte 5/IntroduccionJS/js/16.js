// Funciones
// NOTA: JS se ejecuta en dos fases. Registro que es donde se leen las funciones primero y ejecucuion donde se lee lo que se desea ejecutar

// En la opcion 1, se puede poner sumar() de primero y se ejecutará sin problema, porque primero se lee la funcion y luego la ejecuta
// En la opcion 2 no pasa igual porque JS toma sumarA como un variable, por ende si se pone sumarA() de primero, muestra error


// Declaracion de funcion (opcion 1)
function sumar() {
    console.log(10 + 10);
}

sumar();

// Expresion de la funcion (opcion 2)
const sumarA = function() {
    console.log(3 + 3);
}

sumarA();

// IIFE: se usa mucho en jquery. Son utiles para que no se mezclen las variables y funciones con las de otros archivos (proteger las variables)
(function() {
    console.log('Esto es una funcion');
})(); // El ultimo () es para mandar a llamar la funcion, se invocan ellas mismas





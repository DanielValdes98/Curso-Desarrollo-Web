// PROMISES: Refleja un valor que podra estar disponible ahora, en un futuro o nunca

// Al ejecutar un promise, se pasan dos valores o funciones automaticamente: resolse, reject
// resolve: se ejecuta cuando el promise se cumple
// reject: se ejecuta si no se cumple el promise

const usuarioAutenticado = new Promise( (resolve, reject) => {
    const auth = true;

    if(auth) {
        resolve('Usuario autenticado'); // El promise se cumple
    } else {
        reject('No se pudo iniciar sesion'); // El promise no se cumple
    }

});

console.log(usuarioAutenticado);

usuarioAutenticado
    .then( (resultado) => console.log(resultado))
    .catch( (error) => console.log(error))

// En los promises existen 3 valores:
// Pending : No se ha cumplido pero tampoco se ha rechazado
// Fullfilled : Ya se cumplió el promise
// Rejected : Se ha rechazado o no se pudo cumplir el promise




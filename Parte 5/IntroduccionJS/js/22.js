// Estructuras de control

const puntaje = 1000;


// ===: tres igual revisa estrictimente que sea el mismo valor y mismo tipo de dato
if (puntaje === 1000 ) {
    console.log('El puntaje es igual a 1000');
} else {
    console.log('El numero no es igual');
}


// OTRO EJEMPLO -----------------------------------------

const efectivo = 1000;
const carrito = 800;

if (efectivo > carrito) {
    console.log('Tiene fondos para pagar');
} else {
    console.log('Saldo insuficiente');
}


// OTRO EJEMPLO -----------------------------------------

const rol = 'ADMIN';

if (rol === 'ADMIN') {
    console.log('Acceso a todo el sistema');
} else if (rol === 'EDITOR') {
    console.log('Tienes acceso como editor, estas funciones no estan disponibles para ti');
} 
else {
    console.log('No tienes acceso a estas configuraciones');
}


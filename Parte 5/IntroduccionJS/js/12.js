"use strict"; // Ejecutar el codigo js en forma estricta con buenas practicas

// Objetos

const producto = {
    nombreProducto : 'Monitor HD',
    precio : 100,
    disponible : true
};

// Permite que el objeto no sea modificado, al ejecutarlo de forma estrictica sale error, por eso se usa isFrozen
Object.freeze(producto); // no permite agregar ni eliminar ni modificar tampoco
producto.imagen = "imagen.jpg";

console.log(Object.isFrozen(producto)); // no genera error 

console.log(producto);




// --------------------------------------------------
Object.seal(producto); // permite modificar las propiedades existentes a diferencia del freze
console.log(Object.isSealed(producto)); // no genera error 

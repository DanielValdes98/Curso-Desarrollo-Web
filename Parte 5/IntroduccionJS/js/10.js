// Objetos

const producto = {
    nombreProducto : 'Monitor HD',
    precio : 100,
    disponible : true
};

console.log(producto);

// Agregar nuevas propiedades en el objeto 
producto.imagen = 'imagen.png';
console.log(producto);

// Eliminar propiedades
delete producto.imagen;
console.log(producto);
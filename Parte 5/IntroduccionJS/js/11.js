// Objetos

const producto = {
    nombreProducto : 'Monitor HD',
    precio : 100,
    disponible : true
};

// Forma anterior o vieja
//const precioProducto = producto.precio;
//const nombreProductoA = producto.nombreProducto;

//console.log(precioProducto);
//console.log(nombreProducto);

// Forma actual: Destructuring
const {precio} = producto;
const {nombreProducto} = producto;

console.log(precio);
console.log(nombreProducto);

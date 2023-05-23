// POO

// Object Literal
const producto = {
    nombre: 'PC',
    precio: 200,
    disponibilidad : true,
};

// Clase: Es un contenedor, donde se puede almacenar datos, forma, metodos y funciones que va a tener un objeto en especifico
// POO: Sirve para crear un plano sobre el cual podemos crear multiples objetos con diferentes valores y atributos
// Object Constructor
function Producto(nombre, precio, disp) {
    this.nombre = nombre;
    this.precio = precio;
    this.disp = disp;
}

// PROTOTYPES: Crear funciones que solo se utilizan en un objeto en especifico
// En este ejemplo, la funcion .formatearProducto solo va a estar asociado al objeto Producto
Producto.prototype.formatearProducto = function() {
    return `El producto ${this.nombre} tiene un precio de ${this.precio}`
}

const producto2 = new Producto('Monitor Curso 49"', 800, false);
const producto3 = new Producto('Earbuds"', 500, true);


function formatearProducto(producto) {
    return `El producto ${producto.nombre} tiene un precio de ${producto.precio}`
}

console.log(producto2.formatearProducto());
console.log(producto3);












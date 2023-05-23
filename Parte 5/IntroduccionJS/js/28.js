// CLASES

class Producto {
    // Los parametros de entrada se declaran en el constructor
    constructor(nombre, precio) {
        this.nombre = nombre;
        this.precio = precio;
    }

    // Metodo
    formatearProducto() {
        return `El producto ${this.nombre} tiene un precio de ${this.precio}`;
    }


    // Metodo que retorne el precio del producto
    retornarPrecio() {
        return `El precio del producto es: $${this.precio} USD`;
    }


    obtenerPrecio() {
        console.log(this.precio);
    }
}

const productoA = new Producto('Monitor Curso 49"', 800, false);
const productoB = new Producto('Earbuds"', 500, true);

console.log(productoA);
console.log(productoB);

console.log(productoA.formatearProducto());
console.log(productoA.retornarPrecio());



// OTRO EJEMPLO -----------------------------------------------------------------------------------------


//HERENCIA

// la subclase Libro hereda el constructor y los metodos de la clase Producto
class Libro extends Producto {
    constructor(nombre, precio, isbn) {
        super(nombre, precio); // Traemos del constructor de la super Clase producto dos atributos (nombre, precio)
        this.isbn = isbn;
    }

    detallesLibro() {
        return `El libro "${this.nombre}" con la referencia ${this.isbn} tiene un precio de $${this.precio} COP`;
    }

    // Forma de llamar metodos de la clase padre y modificarlos
    formatearProducto() {
        return `${super.formatearProducto() } y su ISBN es $${this.precio} COP`; 
    }

    obtenerPrecio() {
        super.obtenerPrecio();
        console.log('Y si hay existencia');
    }
}

const libroA = new Libro('Cien años de soledad', 80000, '91587AD47TY6');
console.log(libroA);
console.log(libroA.formatearProducto());
console.log(libroA.detallesLibro());
console.log(libroA.obtenerPrecio());







// Array methods

const meses = ['Enero','Febrero','Marzo','Abril','Mayo'];

// Arreglo de objetos
const carrito = [
    {nombre : "Monitor", precio: 500},
    {nombre : "computador", precio: 500},
    {nombre : "Tablet", precio: 400},
    {nombre : "Audifonos", precio: 30},
    {nombre : "Celular", precio: 2000},
    {nombre : "Lapptop", precio: 300},
    {nombre : "teatro", precio: 350},
];

//forEach: ejecuta al menos un vez cada elemento y va iterando cada uno de ellos
//si marzo se encuentra en el arreglo, imprima un mensaje
meses.forEach(function(mes) {
    if(mes == 'Marzo'){
        console.log('Marzo si esta');
    }
});

// includes
const resultado = meses.includes('Marzo');
console.log(resultado);

//some: ideal para arreglos de objetos como el ejemplo de carrito
let resultadoA = carrito.some(function(producto) {
    return producto.nombre === 'Celular'
});

console.log(resultadoA);


// reduce: toma cantidad de elementos y retorna un resultado
let resultadoB = carrito.reduce(function(total, producto) {
    return total + producto.precio
}, 0); // El 0 es el valor inicial

console.log(resultadoB);


// filter
let resultadoC = carrito.filter(function(producto) {
    return producto.precio>=400
});

console.log(resultadoC);


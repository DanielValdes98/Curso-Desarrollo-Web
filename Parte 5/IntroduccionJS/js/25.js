
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



// ForEach: Loop solo para arreglos. iterar en un array y mostrar los elementos en consola
//  Iterar sobre un array y mostrar los elmemntos en consola
carrito.forEach(producto => console.log(producto));

//map: si se quiere crear un nuevo arrreglo
const arreglo= carrito.map( producto => console.log(producto.nombre));





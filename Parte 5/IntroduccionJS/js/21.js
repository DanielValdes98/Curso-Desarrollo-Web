// Arrow Functions: Es como la expresion de las funciones, pero se le quita el function

// Como solo es una linea, se puede omitir las llaves {}
const sumarA = (n1, n2) => console.log(n1 + n2);
sumarA(5, 3);

// si solo de define un parametro (tecnologia), no es necesario usar parantesis
const aprendiendo = tecnologia => console.log(`Aprendiendo ${tecnologia}`);
aprendiendo('JavaScript');



// ************************************************************

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

//forEach
meses.forEach( mes => {
    if(mes == 'Marzo'){
        console.log('Marzo si esta');
    }
});


//some
let resultadoA = carrito.some( producto =>  producto.nombre === 'Celular');
console.log(resultadoA);


// reduce
let resultadoB = carrito.reduce( (total, producto) =>  total + producto.precio, 0); // El 0 es el valor inicial
console.log(resultadoB);


// filter
let resultadoC = carrito.filter( producto => producto.precio>=400);
console.log(resultadoC);









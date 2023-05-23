// For Loop

for( let i = 1; i < 10; i++ ) {
    if(i % 2 === 0) {
        console.log(`El numero ${i} es par`);
    } else {
        console.log(`El numero ${i} es impar`);  
    }
}

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

for(let i = 0; i < carrito.length; i++ ) {
    console.log(carrito[i].nombre);
}

// While loop: si la c ondicion se cumple, ejecuta el codigo
let i = 1;

while(i < 20) {

    if(i % 2 === 0) {
        console.log(`El numero ${i} es par`);
    } else {
        console.log(`El numero ${i} es impar`);  
    }

    i++; // Incremento
}

let j = 0;

while(j < carrito.length) {
    console.log(carrito[j].nombre);

    j++;
}


// Do while loop: el codigo se ejecuta al menos una vez y luego se ejecuta la condicion

let c = 0;

do {
    console.log(carrito[c].nombre);
    c++;
} while (c < carrito.length);


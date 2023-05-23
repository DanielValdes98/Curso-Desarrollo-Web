// Arrays

const numeros = [10,20,30,40,50];
console.table(numeros);




// const arreglo = ['Hola', 40, true, null]

// // Acceder a los valores de un arreglo
// console.log(numeros[4]);

// // Conocer la extension o longitud de un arreglo
// console.log(meses.length);



// *********************************************************************************



// Esta forma no es recomendable porque hay que indicar la posicion en el array y puede interferir con los datos exstentes
//numeros[5] = 40;

// Para eso se pueden utilizar
numeros.push(60,70); // Agrega valores al final del arreglo
numeros.unshift(30,40); // Agrega valores al inicio del arreglo

console.table(numeros);


const meses = ['Enero','Febrero','Marzo','Abril','Mayo'];
console.table(meses);

meses.pop(); // Elimina el ultimo elemento
meses.shift(); // Elimina el primer elemento

meses.splice(2, 1); // Elimina un elemento asi: (posicion, cantidad que deseas eliminar)
console.table(meses);

// Rest Operator o Spread Operator
const nuevoArreglo = [...meses, 'Junio'];
console.table(nuevoArreglo);




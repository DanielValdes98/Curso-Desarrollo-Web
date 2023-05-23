function sumar(n1, n2) {
    return n1 + n2    
}

const resultado = sumar(5, 6);

console.log(resultado);


// OTRO EJEMPLO: **********************************************
let total = 0;

function agregarCarrito(precio) {
    return total += precio
}

function impuesto(total) {
    return total + total*0.19
}

total = agregarCarrito(200);
total = agregarCarrito(789);
total = agregarCarrito(500);

console.log(total);

const totalAPagar = impuesto(total);
console.log(`El total a pagar es de: ${totalAPagar}`);




// UNIR DOS OBJETOS CON SPREAD OPERATOR

const producto = {
    nombreProducto : 'Monitor HD',
    precio : 100,
    disponible : true
};

const medidas = {
    peso: '1kg',
    medida:'1m'
};

const nuevoProducto = { ...producto, ...medidas };

console.log(producto);
console.log(nuevoProducto);


// This

const reservacion = {
    nombre: 'Daniel',
    apellido: 'Valdes',
    total : 200,
    pagado: false,
    informacion: function() {
        console.log(`El cliente ${this.nombre} reservó y su cantidad a pagar es de ${this.total}`);
    }
}


console.log(reservacion.nombre);

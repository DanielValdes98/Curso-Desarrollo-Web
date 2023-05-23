// Switch Case: mejor opcion si hay muchas opciones en vez de usar el else if

const metodoPago = 'efectivo';

switch (metodoPago) {
    case 'tarjeta':
        console.log('Pagaste con tarjeta');
        break;

    case 'efectivo':
        console.log('Pagaste en efectivo');
        break;

    case 'cheque':
        console.log('Pagaste con cheque');
        break;

    default:
        console.log('No se registrò tu pago');
        break;
}






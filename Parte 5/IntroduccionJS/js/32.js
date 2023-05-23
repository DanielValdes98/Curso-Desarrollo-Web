// Async / await

function descargarNuevosClientes() {
    return new Promise( resolve => {
        console.log('Descargando clientes...espere...');

        setTimeout( () => { // o setInterval
            resolve('Los clientes fueron descargados');
        }, 5000 );
    });
}

function descargarUltimosPedidos() {
    return new Promise( resolve => {
        console.log('Descargando pedidos...espere...');

        setTimeout( () => { // o setInterval
            resolve('Los pedidos fueron descargados');
        }, 3000 );
    });
}

async function app() {
    try {
        //const clientes = await descargarNuevosClientes();
        //const pedidos = await descargarUltimosPedidos();
        //console.log(clientes);
        //console.log(pedidos);


        // El promise.all optimiza un async-await: sAmbas funciones se ejecutan al mismo tiempo, no pasa con el ejemplo anterior, este es más eficiente:
        const resultado = await Promise.all( [descargarNuevosClientes(), descargarUltimosPedidos()] );
        console.log(resultado[0]);
        console.log(resultado[1]);
    } catch (error) {
        console.log(error);
    }
}

app();


//console.log('Este codigo va a ser bloqueado');
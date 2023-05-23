
// Para referirse a un elemento del HTML empezamos con document
const boton = document.querySelector('#boton');

// Eventos
boton.addEventListener('click', () => { // Permite registra un evento a la variable boton
    Notification.requestPermission()
    .then(resultado => console.log(`El resultado es: ${resultado}`))
}); 


if(Notification.permission == 'granted') {
    new Notification('Esta es una notificacion', {
        icon: 'img/ccj.png',
        body: 'Codigo con Juan'
    })
}
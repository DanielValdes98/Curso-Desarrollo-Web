// SELECCIONAR CONTENIDO: HTML CON JS

// querySelector
const heading = document.querySelector('.header__texto h2') // Retorma 0 o 1 elemento
heading.textContent = 'Nuevo heading';
console.log(heading);



// querySelectorAll
const enlaces = document.querySelectorAll('.navegacion a')
enlaces[0].textContent = 'Nuevo texto para enlace' // Modifica el primer enlace
enlaces[0].href = 'http://google.com';
enlaces[0].classList.add('nueva-clase');
//enlaces[0].classList.remove('navegacion__enlace')
console.log(enlaces[0]);


// ----------------------------------------------------------------------------------------


// Generar un nuevo enlace
const nuevoEnlace = document.createElement('A')

// Agregar el href
nuevoEnlace.href = 'nuevo-enlace.html';

// Agregar el texto
nuevoEnlace.textContent = 'Un nuevo enlace aquí';

// Agregar clase
nuevoEnlace.classList.add('navegacion__enlace');

// Agregarlo al documento
const navegacion = document.querySelector('.navegacion');
navegacion.appendChild(nuevoEnlace) // appendChild agrega un nuevo elemento a la clase que se define, como una clase hijo o subclase


console.log(nuevoEnlace);


// --------------------------------------------------------------------------------


// EVENTOS:
console.log(1);

// window: es un nivel más alto que document, hace referencias a las funciones del HTML, es el objeto global, es todo el JS disponible
// addEventListener: tiene un evento asociado y una vez que se ejecute, sigue con el codigo, en este caso el evento que es window cargue completamente
window.addEventListener('load', function() { // load espera a que el JS y los archivos que dependen del HTML esten listos

    console.log(2)
});

window.onload = function() { // onload es lo mismo que load
    console.log(3);
}

document.addEventListener('DOMContentLoaded', function() { // DOMContentLoaded: Solo espera por el HTML, pero no es pera que cargue CSS o imagenes
    console.log(4); 
});

console.log(5); 


//----------------------------------------------------------------------------------------------

// Seleccionar elementos y asociarles un evento:
// click: se puede usar cuando se le da click a imagenes, textos, botones, donde se interactue con el sitio web

// const btnEbiar = document.querySelector('.boton--primario');
// btnEbiar.addEventListener('click', function(evento){
//     console.log(evento);
//     evento.preventDefault(); // Es util para validar un formulario y que se envie al servidor si todo esta correcto
//     console.log('Enviando formulario');
// })


// -------------------------------------------------------------------------------------------------------


// Eventos de los inputs y textarea:
const datos = {
    nombre: '',
    email:'',
    mensaje:''
} 

const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('.formulario');

nombre.addEventListener('input', leerTexto);
email.addEventListener('input', leerTexto);
mensaje.addEventListener('input', leerTexto);

// Evento de submit: En un formulario se usa submit, a diferencia con el 'click' de arriba es que ese esta asociado al boton, 'submit' esta asociado a la clase formulario
formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    // Validar formulario
    const { nombre, email, mensaje } = datos;

    if(nombre === '' || email === '' || mensaje === '') {
        mostrarAlerta('Todos los campos son obligatorios', true);

        return; // Corta la ejcucion del codigo si no se cumple la o las condiciones del if
    }

    // Crear la alerta de enviar correctamente:
    mostrarAlerta('Mensaje enviado correctamente...');

});


function leerTexto(e) {
    // console.log(e);
    // console.log('Escribiendo');
    // console.log(e.target.value);
    datos[e.target.id] = e.target.value; // Funcioan bien porque tiene los mismos nombres
    console.log(e.target);
    console.log(datos);
}

// Mostrar alerta:
function mostrarAlerta(mensaje, error = null) {
    const alerta = document.createElement('P');
    alerta.textContent = mensaje;

    if(error) {
        alerta.classList.add('error');
    } else {
        alerta.classList.add('correcto');
    }

    formulario.appendChild(alerta);

    // Desaparezca despues de 3 segundos:
    setTimeout(() => {
        alerta.remove();
    }, 3000);
}



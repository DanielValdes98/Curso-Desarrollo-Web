function sumar(numero1 = 0, numero2 = 0) { //numero 1-2 son parametros. Se declaran incialmente en 0 para que no aparezca error en caso de no asignarles un valor al llamar la funcion
    console.log(numero1 + numero2); 
}

sumar(100, 10); // Argumentos o valores

// -------------------------------------------------------

const sumarA = function(n1, n2) {
    console.log(n1 + n2);
}

sumarA(120, 20);
var nombre = "Ana"; // Ambito de funcion (variable global) (evitar)
let edad = 25; // Ambito de bloque (variable local) (recomendado)
const PI = 3.1316; // Constante (inmutable)


let radio = prompt("ingrese el radio del circulo: ");
let radioEnNumero = parseInt(radio);

function calcularCirculo(radio){

    let resultado = (radio **2) / Math.PI
    return resultado
}

let ancho = prompt("¿Cuanto mide el Ancho?: ");
let largo = prompt("¿Cuanto mide el Largo?: ");
let anchoEnNumero = parseInt(ancho);
let largoEnNumero = parseInt(largo);

function calcularAreaRectangulo(alto, ancho){
return ancho * largo;
}



"use strict"
let random = Math.random() * 100000;
random = Math.floor (random) ;
let numero = document.querySelector ("#NumRandom");
numero.innerHTML=random;
let boton = document.querySelector ("#botonCaptcha");
let inputCaptcha = document.querySelector("#Ingresarcaptcha");
let Resultado = document.querySelector ("#respuesta");

boton.addEventListener("click",Send);

function Send(){

if(inputCaptcha.value == random){
Resultado.innerHTML = "Su respuesta es correcta"
}
else{
Resultado.innerHTML = "Su respuesta es incorrecta"
}

}
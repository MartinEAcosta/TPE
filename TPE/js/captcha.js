"use strict"
let random = Math.random() * 100000;
random = Math.floor (random);

let numero = document.querySelector("#num_random");
numero.innerHTML=random;

let form = document.querySelector('#form');
form.addEventListener("submit", registrar);

let inputCaptcha = document.querySelector("#captcha");
let resultado = document.querySelector("#respuesta");

function registrar(e){
    let verificacion = inputCaptcha.value;

    e.preventDefault();
    let formData = new FormData(form);
    let nombre = formData.get('usuario');
    let clave = formData.get('pass');
    let genero = formData.get('genero')
    let localidad = formData.get('localidad')
    let captcha = formData.get('captcha');


    

    console.log('Entrando en la funcion');
    
    if(verificacion == random){
        resultado.innerHTML = "Su respuesta es correcta, registrado con exito."
        console.log(nombre,clave,genero,localidad,captcha);
    }

    else{
        resultado.innerHTML = "Su respuesta es incorrecta, no se ha podido registrar."
        console.log('No se registro el usuario.');
}

}
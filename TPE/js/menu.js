"use strict"
let btn_inicio = document.querySelector('#inicio');
btn_inicio.addEventListener('click', inicio);

let btn_servicio = document.querySelector('#servicio');
btn_servicio.addEventListener('click', servicio);

let btn_productos = document.querySelector('#productos');
btn_productos.addEventListener('click',productos);

document.querySelector(".btn_menu").addEventListener("click", toggleMenu);

function toggleMenu() {
    document.querySelector(".navigation").classList.toggle("show");
}

function inicio(){
    window.location.href='index.html';
}

function servicio(){
    window.location.href='servicio_mecanico.html';
}
function productos(){
    window.location.href='productos.html';
}
"use strict"
document.querySelector(".lista-btn").addEventListener("click", toggleMenu);

function toggleMenu() {
    document.querySelector(".botones").classList.toggle("show");
}
"use strict"
const url = "https://62bdaea2bac21839b608f94d.mockapi.io/api/Producto";
const tabla = document.querySelector("#tabla");
tabla.innerHTML = "";

async function obtenerDatos(){
    try {
        let res = await fetch(url);
        let json = await res.json();
        console.log(json);
        for (const articulos of json){
            let producto = articulos.productotipo;
            tabla.innerHTML += `<td>${producto}</td>`;
        }



    } 
    catch (error) {
        console.log(error);
    }
}
obtenerDatos();
"use strict"

let btnagregar = document.querySelector("#btn-agregar");
btnagregar.addEventListener('click', agregarprod);

let btnquitar = document.querySelector("#btn-quitar");
btnquitar.addEventListener('click', quitarprod);

let compras = [];

function agregarprod() {
    console.log("Agregar producto al carrito");
    let Producto = document.querySelector('#Producto').value;
    let Precio = parseInt(documen.querySelector('#Precio').value);
    let Cantidad = parseInt(document.querySelector('#Cantidad').value);
    let renglon = {
        "Producto": Producto,
        "Precio": Precio,
        "Cantidad": Cantidad,
        "totalItem": Precio*Cantidad,
    }
    compras.push(renglon);
    document.querySelector("#lista").innerHTML += "<li>" + renglon.Producto + " Cantidad " + renglon.Cantidad + "</li>";
    documentquerySelector('#Producto').value = "";
}
function quitarprod(){}
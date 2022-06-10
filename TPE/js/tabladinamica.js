"use strict"

let btnagregar = document.querySelector("#btn-agregar");
btnagregar.addEventListener('click', agregarprod);



let btntotal = document.querySelector("#btn-total");
btntotal.addEventListener('click', totalprod);
 
let btnlimpiar = document.querySelector("#btn-limpiar");
btnlimpiar.addEventListener('click', limpiarcarrito);

let compras = [];

function agregarprod() {
    console.log("Agregar producto al carrito");
    let Producto = document.querySelector('#Producto').value;
    let Precio = parseInt(document.querySelector('#Precio').value);
    let Cantidad = parseInt(document.querySelector('#Cantidad').value);
    let renglon = {
        "Producto": Producto,
        "Precio": Precio,
        "Cantidad": Cantidad,
        "totalItem": Precio*Cantidad
    }
    compras.push(renglon);
    document.querySelector("#lista").innerHTML += "<li>" + renglon.Producto + " Cantidad " + renglon.Cantidad + "</li>";
    document.querySelector('#Producto').value = "";
}
function totalprod(){
    console.log("Total de precio")
    let total = 0;
    for(let i = 0; i< compras.length; i++){
        let r = compras[i]
        console.log(r)
        total += r.totalItem;
    }
    let max = compras[0].totalItem;
    for(let r of compras) {
        console.log(r)
        if(max< r.totalItem)
            max = r.totalItem;
    }
    document.querySelector("#total").innerHTML = 
        "Total: $" + total +
        " Maximo: $" + max;
}

function limpiarcarrito() {
    console.log("Limpiar carrito")
    document.querySelector("#lista").innerHTML = "";
    document.querySelector("#total").innerHTML = "";
}
"use strict"
const url = "https://62bdaea2bac21839b608f94d.mockapi.io/api/Producto";
const tabla = document.querySelector('#tabla');
let id = 0;
tabla.innerHTML = "";

// GET //  


async function obtenerDatos(){
    try {
        let res = await fetch(url);
        let json = await res.json();
        console.log(json);
        for (const articulos of json){
            let producto = articulos.tipoprod;
            let precio = articulos.precio;
            let stock = articulos.stock;
            id = articulos.id;
            tabla.innerHTML += `<tr>   
                                    <td>${producto}</td>
                                    <td>$${precio}</td>
                                    <td>${stock}</td>
                                    <td>
                                    <button type="button" class="btnEliminar" id="${id}">Eliminar</button>
                                    <button type="button" class="btnEditar" id="${id}">Editar</button></td>
                                </tr>`;
        }
       
    }
    catch(error) {
        console.log(error);
    }
}

// POST //

let btnagregar = document.querySelector("#agregarprd").addEventListener('click', agregaDato);

async function agregaDato(){
    
    let productonew = document.querySelector("#txtprod").value;
    let precionew = document.querySelector("#txtprecio").value;
    let cantnew = document.querySelector("#txtcant").value;

    let productonuevo = {
        "tipoprod": productonew,
        "precio": precionew,
        "stock": cantnew,
    }
    try {
        let res = await fetch(url, {
            "method": "POST",
            "headers": {"Content-type": "application/json" },
            "body": JSON.stringify(productonuevo)
        });
        if (res.status === 201) {
            console.log("Se agrego un prod");
        }
        tabla.innerHTML = "";
        obtenerDatos();
    }
    catch (error) {
        console.log(error);
    }
}

// DELETE //

async function borrarFila(id){
    try{
        let res = await fetch (`${url}/${id}`, {
            "method": "DELETE",
        });
        if (res.status === 200) {
            obtenerDatos()
            console.log("Eliminado")
        }
        else {
            console.log("Fallo el intento de borrar");
        }
    }
    catch (error) {
        console.log(error);
    }
    obtenerDatos();
}

//EDIT//

async function editarFila(id){
    
    let productonew = document.querySelector("#txtprod").value;
    let precionew = document.querySelector("#txtprecio").value;
    let cantnew = document.querySelector("#txtcant").value;

    let productonuevo = {
        "tipoprod": productonew,
        "precio": precionew,
        "stock": cantnew,
    }

    try {
        let res = await fetch(`${url}/${id}`,{
            "method": "PUT",
            "headers": {"Content-type": "application/json" },
            "body": JSON.stringify(productonuevo)
        });
        if (res.status=== 200) {
            console.log("Se modifico un prod");
        }

     
    }
    catch (error) {
        console.log(error);
    }
}
obtenerDatos();


// BUTTONS INTEGERS //

document.addEventListener("click", (e) => {
    if(e.target.classList.contains("#btnEliminar")){
        borrarFila(e.target.id)
    }
});
document.addEventListener("click", (e) => {
    if(e.target.classList.contains("#btnEditar")){
        editarFila(e.target.id)
    }
});


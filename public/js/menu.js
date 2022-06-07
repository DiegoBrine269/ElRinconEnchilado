import menuNavegacion from './menuNavegacion.js';

let carrito = [];

window.addEventListener('DOMContentLoaded', (event) => {
    menuNavegacion('platillos');  
    agregarCarrito(); 
    modalCarrito(); 
});

function agregarCarrito () {
    let body = document.querySelector('body');

    body.addEventListener('click', e => {
        
        if(e.target.classList.contains('btn-agregar-carrito')){
            const id = e.target.parentNode.parentNode.parentNode.dataset.id;
            carrito = [...carrito, id];
        }
    });
}

function modalCarrito() {
    // Get the modal
    var modal = document.getElementById("modalCarrito");

    // Get the button that opens the modal
    var btn = document.getElementById("btn-mostrar-carrito");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
}
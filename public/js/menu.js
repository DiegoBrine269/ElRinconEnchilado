import menuNavegacion from './menuNavegacion.js';
        
let carrito = [];

window.addEventListener('DOMContentLoaded', (event) => {
    menuNavegacion('platillos');  
    agregarCarrito(); 

    MicroModal.init();
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


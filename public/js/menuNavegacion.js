export default function menuNavegacion (nombreSeccion) {
    
    let categorias = document.querySelector('.categorias');

    categorias.addEventListener('click', e => {

        if(e.target.classList.contains('categoria')){

            //Obtenemos arreglo de hijos
            const nodosCategorias = [...categorias.children];

            //Eliminamos la clase selected de todos los hijos
            nodosCategorias.forEach(categoria => {
                categoria.classList.remove('selected');
            });

            //Añadimos la clase selected a la pestaña seleccionada
            e.target.classList.add('selected');

            //Obtenemos arreglo de secciones de platillos
            const nodosSecciones = [...document.querySelector('.contenedor-secciones').children];
            
            //Oculta todas las secciones diferentes
            nodosSecciones.forEach(seccion => {
                seccion.classList.add('oculto');
            });

            //Muestro la sección de acuerdo a la pestaña que se clickeó
            document.querySelector('.' + nombreSeccion + '.' + e.target.innerText.toLowerCase()).classList.remove('oculto');
        }
    })
}
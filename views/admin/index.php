
<div class="contenedor">
    <h2>Sección de administración</h2>
</div>
<nav class="navbar">
    <ul class="categorias contenedor">
        <li class="categoria selected">Productos</li>
        <li class="categoria">Pedidos</li>
        <li class="categoria">Trabajadores</li>
    </ul>
</nav>

<div class="control contenedor">
    <form method="GET" action="">
        <input class="caja-de-texto" type="text" name="patron" id="patron">
        <input class="boton boton-principal" type="submit" value="Buscar">
    </form>

    <div class="opciones">
        <button type="button" class="boton">Registrar</button>
        <button type="button" class="boton">Actualizar</button>
        <button type="button" class="boton">Eliminar</button>
    </div>
</div>


<main class="contenedor contenedor-secciones">
    <div class="admin productos">
        <p>Sección de productos</p>  
        <table>
            
        </table>    
    </div>

    <div class="admin pedidos oculto">
        <p>Sección de pedidos</p>
    </div>

    <div class="admin trabajadores oculto">
        <p>Sección de trabajadores</p>
    </div>
</main>

<script type="module" src="js/admin.js"></script>
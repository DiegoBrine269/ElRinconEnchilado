
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
        <input class="btn btn-principal" type="submit" value="Buscar">
    </form>

    <div class="opciones">
        <button type="button" class="btn">Registrar</button>
        <button type="button" class="btn">Actualizar</button>
        <button type="button" class="btn">Eliminar</button>
    </div>
</div>


<main class="contenedor contenedor-secciones">
    <div class="admin productos">
        <table border class="tabla tabla-productos">
            <thead>
                <td>ID</td>
                <td>Nombre</td>
                <td>Imagen</td>
                <td>Descripción</td>
                <td>Categoría</td>
                <td>Precio</td>
            </thead>
            <tbody>
                <?php 
                    foreach ($productos as $producto) {
                ?>
                <tr>
                    <td> <?php echo $producto->idProducto ?> </td>
                    <td> <?php echo $producto->nombreProducto ?> </td>
                    <td> <img class="tabla-img" src="<?php echo $producto->imagen ?>" alt="Imagen de producto"> </td>
                    <td> <?php echo $producto->descripcion ?> </td>
                    <td> 
                        <?php 
                            switch ($producto->categoria) {
                                case '1': 
                                    echo 'Desayunos';
                                    break;
                                case '2':
                                    echo 'Comidas';      
                                    break;                      
                                case '3': 
                                    echo 'Bebidas';
                                    break;
                                case 4:
                                    echo 'Postres';
                                    break;
                            }
                        ?>    
                    </td>
                    <td> $ <?php echo $producto->precio ?> </td>
                </tr>
                <?php 
                    }
                ?>

            </tbody>
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
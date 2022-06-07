<nav class="navbar">
    <ul class="categorias contenedor">
        <li class="categoria selected">Desayunos</li>
        <li class="categoria">Comidas</li>
        <li class="categoria">Bebidas</li>
        <li class="categoria">Postres</li>
    </ul>
</nav>

<main class="contenedor contenedor-secciones">
    <div class="platillos desayunos">

        <?php 
            // Imprimiendo los desayunos
            foreach($productos as $producto) { 
                if ($producto->categoria === "1") {    
            ?>
                <div class="platillo">
                    <div class="img-contenedor contenedor">
                        <img class="platillo-img" src="<?php echo $producto->imagen ?>" alt="" class="platillo-img">
                    </div>
                    <div class="platillo-informacion">
                        <h3 class="platillo-titulo"> <?php echo $producto->nombreProducto ?> </h3>
                        <p class="platillo-descripcion"> <?php echo $producto->descripcion ?> </p>
                        <p class="platillo-precio"> $ <?php echo $producto->precio ?> </p>
                        <div class="btn-contenedor">
                            <button class="btn btn-success btn-agregar-carrito">Agregar al carrito</button>                
                        </div>
                    </div>
                </div>
            <?php 
                }
            }
        ?>

    </div>

    <div class="platillos comidas oculto">
        <?php 
            // Imprimiendo los desayunos
            foreach($productos as $producto) { 
                if ($producto->categoria === "2") {    
            ?>
                <div class="platillo">
                    <div class="img-contenedor contenedor">
                        <img class="platillo-img" src="<?php echo $producto->imagen ?>" alt="" class="platillo-img">
                    </div>
                    <div class="platillo-informacion">
                        <h3 class="platillo-titulo"> <?php echo $producto->nombreProducto ?> </h3>
                        <p class="platillo-descripcion"> <?php echo $producto->descripcion ?> </p>
                        <p class="platillo-precio"> $ <?php echo $producto->precio ?> </p>
                        <div class="btn-contenedor">
                            <button class="btn btn-success btn-agregar-carrito">Agregar al carrito</button>                
                        </div>
                    </div>
                </div>
            <?php 
                }
            }
        ?>
    </div>

    <div class="platillos bebidas oculto">
        <?php 
            // Imprimiendo los desayunos
            foreach($productos as $producto) { 
                if ($producto->categoria === "3") {    
            ?>
                <div class="platillo">
                    <div class="img-contenedor contenedor">
                        <img class="platillo-img" src="<?php echo $producto->imagen ?>" alt="" class="platillo-img">
                    </div>
                    <div class="platillo-informacion">
                        <h3 class="platillo-titulo"> <?php echo $producto->nombreProducto ?> </h3>
                        <p class="platillo-descripcion"> <?php echo $producto->descripcion ?> </p>
                        <p class="platillo-precio"> $ <?php echo $producto->precio ?> </p>
                        <div class="btn-contenedor">
                            <button class="btn btn-success btn-agregar-carrito">Agregar al carrito</button>                
                        </div>
                    </div>
                </div>
            <?php 
                }
            }
        ?>
    </div>

    <div class="platillos postres oculto">
        <?php 
            // Imprimiendo los desayunos
            foreach($productos as $producto) { 
                if ($producto->categoria === "4") {    
            ?>
                <div class="platillo">
                    <div class="img-contenedor contenedor">
                        <img class="platillo-img" src="<?php echo $producto->imagen ?>" alt="" class="platillo-img">
                    </div>
                    <div class="platillo-informacion">
                        <h3 class="platillo-titulo"> <?php echo $producto->nombreProducto ?> </h3>
                        <p class="platillo-descripcion"> <?php echo $producto->descripcion ?> </p>
                        <p class="platillo-precio"> $ <?php echo $producto->precio ?> </p>
                        <div class="btn-contenedor">
                            <button class="btn btn-success btn-agregar-carrito">Agregar al carrito</button>                
                        </div>
                    </div>
                </div>
            <?php 
                }
            }
        ?>
    </div>
</main>

<script type="module" src="js/menu.js"/></script>
<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($titulo)){
        $titulo = "El Rincón Enchilado";
    }

    if(!isset($pagina)){
        $pagina = '/';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $titulo ?> </title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <section class="contenedor contenedor-titulo">
        <h1>El Rincón Enchilado</h1>
        <?php 
            if($pagina === 'menu') {
        ?>
            <button id="btn-mostrar-carrito" class="btn btn-success">Mostrar carrito</button>
        <?php 
            }
        ?>
    </section>   

    <?php echo $contenido ?>

    <footer>
        <div class="contenedor">
            5CV2 Equipo 3. Análisis y Diseño de Sistemas.
        </div>
    </footer>

</body>
</html>
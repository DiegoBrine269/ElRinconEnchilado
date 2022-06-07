<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($titulo)){
        $titulo = "El Rincón Enchilado";
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
    <img src="" alt=""> 
    <section class="contenedor contenedor-titulo">
        <h1>El Rincón Enchilado</h1>
    </section>   

    <?php echo $contenido ?>

</body>
</html>
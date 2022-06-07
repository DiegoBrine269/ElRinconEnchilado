<?php
    require_once __DIR__ . '/../includes/app.php';
    use MVC\Router;
    use Controllers\InicioController;
    use Controllers\AdminController;

    $router = new Router();

    $router->get('/menu', [InicioController::class, 'menu']);
    $router->get('/login', [InicioController::class, 'login']);
    $router->get('/admin', [AdminController::class, 'index']);
   
    $router->comprobarRutas();
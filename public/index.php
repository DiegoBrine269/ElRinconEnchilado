<?php
    require_once __DIR__ . '/../includes/app.php';
    use MVC\Router;
    use Controllers\InicioController;
    use Controllers\AdminController;
    use Controllers\ConsumidorController;

    $router = new Router();

    $router->get('/menu', [InicioController::class, 'menu']);
    $router->get('/login', [InicioController::class, 'login']);
    $router->get('/admin', [AdminController::class, 'index']);
    $router->get('/confirmar-orden', [ConsumidorController::class, 'confirmarOrden']);
    $router->get('/rastrear-orden', [ConsumidorController::class, 'rastrearOrden']);

    $router->comprobarRutas();
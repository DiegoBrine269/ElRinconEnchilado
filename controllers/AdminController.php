<?php
    namespace Controllers;

    use MVC\Router;
    use Models\Producto;

    class AdminController {
        public static function index (Router $router) {
            $productos = Producto::all();
            $router->render('admin/index', [
                'productos' => $productos
            ]);
        }
    }
<?php
    namespace Controllers;
    use MVC\Router;
    use Models\Producto;

    class InicioController {
        public static function menu (Router $router) {
            $productos = Producto::all();
            $router->render('menu', [
                'productos' => $productos,
                'pagina' => 'menu'
            ]);
        } 

        public static function login (Router $router) {
            $router->render('login');
        } 
    }
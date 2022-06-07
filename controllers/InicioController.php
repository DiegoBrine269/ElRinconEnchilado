<?php
    namespace Controllers;
    use MVC\Router;

    class InicioController {
        public static function menu (Router $router) {
            $router->render('menu', [
                'nombre' => 'Alan',
                'correo' => 'alan@gmail.com'
            ]);
        } 

        public static function login (Router $router) {
            $router->render('login');
        } 
    }
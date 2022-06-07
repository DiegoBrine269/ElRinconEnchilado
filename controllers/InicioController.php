<?php
    namespace Controllers;
    use MVC\Router;

    class InicioController {
        public static function menu (Router $router) {
            $router->render('menu');
        } 

        public static function login (Router $router) {
            $router->render('login');
        } 
    }
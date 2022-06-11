<?php
    namespace Controllers;

    use MVC\Router;

    class ConsumidorController {
        public static function confirmarOrden (Router $router) {
            $router->render('consumidor/confirmarOrden');
        }

        public static function rastrearOrden (Router $router) {
            $router->render('consumidor/rastrearOrden');
        }
    }
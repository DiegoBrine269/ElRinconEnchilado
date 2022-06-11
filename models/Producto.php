<?php
    namespace Models;

    class Producto extends ActiveRecord {
        protected static $tabla = 'producto';
        protected static $columnasDB = ['idProducto', 'nombreProducto', 'imagen', 'descripcion', 'categoria', 'disponibilidad', 'precio'];

        public $idProducto;
        public $nombreProducto;
        public $imagen;
        public $descripcion;
        public $categoria;
        public $disponibilidad;
        public $precio;

        public function __construct($args = []){
            $this->idProducto = $args['idProducto'] ?? null;
            $this->nombreProducto = $args['nombreProducto'] ?? null;
            $this->imagen = $args['imagen'] ?? null;
            $this->descripcion = $args['descripcion'] ?? null;
            $this->categoria = $args['categoria'] ?? null; 
            $this->disponibilidad = $args['categoria'] ?? null; 
            $this->precio = $args['categoria'] ?? null; 
        }

        public function validar () {
            if(!$this->idProducto){
                self::$errores[] = 'El ID del Producto no puede ser nulo';
            }

            if(!$this->nombreProducto){
                self::$errores[] = 'El nombre no puede ser nulo';
            }

            if(!$this->imagen){
                self::$errores[] = 'La imagen no puede ser nula';
            }

            if(!$this->descripcion){
                self::$errores[] = 'La descripción no puede ser nula';
            }

            if(!$this->categoria){
                self::$errores[] = 'La categoria no puede ser nula';
            }

            if(!$this->disponibilidad){
                self::$errores[] = 'La disponibilidad no puede ser nula';
            }

            if(!$this->precio){
                self::$errores[] = 'El precio no puede ser nulo';
            }

            return self::$errores;
        }

    }
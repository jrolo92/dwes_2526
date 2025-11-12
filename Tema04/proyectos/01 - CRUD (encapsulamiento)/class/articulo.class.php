<?php

    /*
         Proyecto 4.1: Definir una clase Articulo con propiedades id, descripción, modelo, marca, categoría, unidades y precio.
                        Con encapsulamiento.
         Autor: Javier Rodríguez
         Fecha: 11/11/25
     */

    class Class_articulo {
        // Atributos privados:
        private $id;
        private $descripcion;
        private $modelo;
        private $marca;
        private $categorias;
        private $unidades;
        private $precio;

        // Constructor
        public function __construct(
            $id = null,
            $descripcion = null,
            $modelo = null,
            $marca = null,
            $categorias = null,
            $unidades = 0,
            $precio = 0.0
        ){
            $this->id = $id;
            $this->descripcion = $descripcion;
            $this->modelo = $modelo;
            $this->marca = $marca;
            $this->categorias = $categorias;
            $this->unidades = $unidades;
            $this->precio = $precio;
        }

        // Getters y Setters
        public function get_id(){
            return $this->id; 
        }  
        public function set_id($id){
            $this->id = $id; 
            return $this;
        }
        public function get_descripcion(){
            return $this->descripcion; 
        }
        public function set_descripcion($descripcion){
            $this->descripcion = $descripcion; 
            return $this;
        }
        public function get_modelo(){
            return $this->modelo; 
        }
        public function set_modelo($modelo){
            $this->modelo = $modelo; 
            return $this;
        }
        public function get_marca(){
            return $this->marca; 
        }
        public function set_marca($marca){
            $this->marca = $marca; 
            return $this;
        }
        public function get_categorias(){
            return $this->categorias; 
        }
        public function set_categorias($categorias){
            $this->categorias = $categorias; 
            return $this;
        }
        public function get_unidades(){
            return $this->unidades; 
        }
        public function set_unidades($unidades){
            $this->unidades = $unidades; 
            return $this;
        }
        public function get_precio(){
            return $this->precio; 
        }
        public function set_precio($precio){
            $this->precio = $precio; 
            return $this;
        }
    }
?>
<?php
    /*
       Ejemplo 4.6: Uso de atributos y métodos estáticos en una clase
       Autor: Javier Rodríguez
       Fecha: 06/11/2025

    */
    class Class_pelicula {
        public $id;
        public $titulo;
        static public $pais = "España";

        function __construct($id=0, $titulo= null) {
            $this->id = $id;
            $this->titulo = $titulo;
        }

        public function mostrarPais(){
            return self::$pais; 
        }

        static public function mostrarPaisEstatico(){
            echo 'Pais' . self::$pais ;
            // echo 'titulo' . $this->titulo ; // Esto generará un error. No se puede acceder a un atributo público no estático desde un método estático.
        }
    }

?>
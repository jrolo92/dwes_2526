<?php
    /*
        clase: Class_corredor
        descripción: clase con propiedades extraídas de las columnas de la tabla corredores
    */

    class Class_corredor {
        // Atributos (EN EL MISMO ORDEN QUE EN LA TABLA)
        public $id;
        public $nombre;
        public $apellidos;
        public $ciudad;
        public $fecha_nac;
        public $sexo;
        public $email;
        public $dni;
        public $categoria_id;
        public $club_id;

        // constructor
        public function __construct(
            $id = null,
            $nombre = null,
            $apellidos = null,
            $ciudad = null,
            $fecha_nac = null,
            $sexo = null,
            $email = null,
            $dni = null,
            $categoria_id = null,
            $club_id = null
        ){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->ciudad = $ciudad;
            $this->fecha_nac = $fecha_nac;
            $this->sexo = $sexo;
            $this->email = $email;
            $this->dni = $dni;
            $this->categoria_id = $categoria_id;
            $this->club_id = $club_id;
        }
        
    }
?>
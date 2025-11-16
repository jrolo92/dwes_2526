<?php 

    /*
        Clase alumno: con propiedades: id, nombre, apellidos, email, fecha de nacimiento, curso y asignaturas
        (SIN ENCAPSULAMIENTO)
    */
    class Class_alumno {
        public $id;
        public $nombre;
        public $apellidos;
        public $email;
        public $fechaNacimiento;
        public $curso;
        public $asignaturas;

        public function __construct(
            $id=null,
            $nombre=null,
            $apellidos=null,
            $email=null,
            $fechaNacimiento=null,
            $curso=null,
            $asignaturas=null
        ){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->curso = $curso;
            $this->asignaturas = $asignaturas;
        }

        /*
            Método que calcula la edad del alumno
            Parámetros: ninguno
            Retorno: edad actual.
        */
        public function getEdad(){
            // Suponemos que la fecha está en formato 'DD-MM-YYYY' (importante para el siguiente paso).
            $fecha = $this->fechaNacimiento;
            // Extraemos el año de nacimiento con substr (le indicamos el string, desde dónde empezar a extraer y qué cantidad de caracteres).
            $anioNac = substr($fecha, 6, 4);  
            // Extraemos el año actual con la función date.
            $anioActual = date('Y');
            // Y calculamos la edad restando el año de nacimiento al año actual.
            $edad = $anioActual - $anioNac;
            return $edad;
        }
    }
?>

<?php 

    /*
        Clase alumno: con propiedades: id, nombre, apellidos, email, fecha de nacimiento, curso y asignaturas
        (CON ENCAPSULAMIENTO)
    */
    class Class_alumno {
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $fechaNacimiento;
        private $curso;
        private $asignaturas;

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
            $this->fechaNacimiento=$fechaNacimiento;
            $this->curso=$curso;
            $this->asignaturas=$asignaturas;
        }

        // getters y setters 
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getApellidos(){
            return $this->apellidos;
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }

        public function setFechaNacimiento($fecha_nacimiento){
            $this->fechaNacimiento = $fecha_nacimiento;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }

        public function getAsignaturas(){
            return $this->asignaturas;
        }

        public function setAsignaturas($asignaturas){
            $this->asignaturas = $asignaturas;
        }


        /*
            Método que calcula la edad del alumno
            Parámetros: ninguno
            Retorno: edad actual.
        */
        public function getEdad(){
            // Suponemos que la fecha está en formato 'DD-MM-YYYY'
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
<?php 
    /*
        Clase tabla: va a gestionar grupos de alumnos
    */

    class Class_tabla_alumnos {
        private $tabla;

        // El constructor nos va a crear un array vacío (en el que luego insertaremos los datos de los alumnos)
        public function __construct(){
            $this->tabla = [];
        }
        
        // Getter y setter
        public function getTabla(){
            return $this->tabla;
        }

        public function setTabla($tabla){
            $this->tabla = $tabla;
        }

        /*
            método:create()
            descripción: añade un nuevo alumno a la tabla
            parámetros: objeto a añadir de la clase Alumno (indicar nombre de la clase)
        */
        public function create(Class_alumno $alumno){
            $this->tabla[] = $alumno;
        }

        /*
            método: get_indice_from_id()
            descripción: obtiene el indice del array en el que se encuentra un alumno a partir del id
            parámetros: id del alumno
            retorno: indice del alumno en un array
        */
        public function get_indice_from_id($id_alumno){
            foreach($this->tabla as $indice => $alumno){
                // Como en cada vuelta lo que hay es un objeto($articulo) usamos el get_id()
                if ($alumno->getId() == $id_alumno){
                    return $indice;
                }
            }
            return null;
        }


        /*
            método: read()/get_alumno_por_indice()
            descripción: devuelve un objeto alumno a partir del índice
            parámetros: indice en el que se encuentra el alumno.
            retorno: objeto de la clase alumno
        */
        public function get_alumno_por_indice($indice){
            return $this->tabla[$indice];
        }

        /*
            método: update()
            descripción: actualiza la información de un alumno de la tabla a partir del indice en el que se encuentra
            parámetros: objeto de la clase alumno, indice del alumno (a actualizar)
        */
        public function update(Class_alumno $alumno, $indice){
            $this->tabla[$indice] = $alumno;
        }

        /*
            método:delete()
            descripción: elimina un alumno del array a partir del índice en el que se encuentra y reindexa el array
            parámetros: índice del array en el que se encuentra el alumno a eliminar
        */
        public function delete($indice){
            unset($this->tabla[$indice]);
            $this->tabla = array_values($this->tabla);
        }

        /*
            método: getAsignaturas()
            descripción: devuelve un array de asignaturas, simula una consulta SQL "SELECT * FROM asignaturas"
            Es estático porque no va a depender de una instancia concreta (es siempre igual).
        */
        public static function getAsignaturas(){
            return [
                "DWES",
                "DWEC",
                "DA",
                "HLC",
                "EINEM",
                "DIWEB"
            ];
        }

        /*
            método: getCursos()
            descripción: devuelve un array de cursos, simula una consulta SQL "SELECT * FROM cursos"
            Es estático porque no va a depender de una instancia concreta (es siempre igual).
        */
        public static function getCursos(){
            return [
                "1SMR",
                "2SMR",
                "1DAW",
                "2DAW",
                "1AD",
                "2AD"
            ];
        }

        /* Funcion para convertir array de indices de asignauta a nombres de asignatura.
            Parámetros: $indices -> array de indices de asignatura (el del objeto ya instanciado).
            Retorno: Array de nombres de asignaturas.    
        */
        public static function asignaturas_indices_a_nombres($indices){
            //Obtenemos un array con todas las asignaturas:
            $todas_asignaturas = self::getAsignaturas();

            // Creamos un array para almacenar los nombres de las asignaturas:
            $nombres_asignaturas = [];

            // Recorremos el array de índices y obtenemos los nombres de la asignaturas:
            foreach ($indices as $indice){
                $nombres_asignaturas[] = $todas_asignaturas[$indice];
            }

            return $nombres_asignaturas;    
        }

        /*
            método: getDatos()
            descripción: crea instancias de la Class_alumno y las guarda en el array $tabla
        */
        public function getDatos(){
            // Creamos las instancias de la clase alumno
            $alumno1 = new Class_alumno(1, "Lucía", "Gómez", "lucia@example.com", "12-03-2005", 2, [0, 5]);
            $alumno2 = new Class_alumno(2, "Carlos", "Ruiz", "carlos@example.com", "22-11-2004", 3, [1, 3]);
            $alumno3 = new Class_alumno(3, "María", "López", "maria@example.com", "08-07-2006", 0, [4, 2]);
            $alumno4 = new Class_alumno(4, "Javier", "Martínez", "javier@example.com", "30-01-2005", 1, [0, 1]);
            $alumno5 = new Class_alumno(5, "Ana", "Sánchez", "ana@example.com", "15-05-2004", 4, [2, 3]);
            $alumno6 = new Class_alumno(6, "David", "Fernández", "david@example.com", "19-09-2006", 5, [4, 5]);
            // Las guardamos en la tabla de alumnos:
            $this->tabla[] = $alumno1;
            $this->tabla[] = $alumno2;
            $this->tabla[] = $alumno3;
            $this->tabla[] = $alumno4;
            $this->tabla[] = $alumno5;
            $this->tabla[] = $alumno6;
        }
    }
?>
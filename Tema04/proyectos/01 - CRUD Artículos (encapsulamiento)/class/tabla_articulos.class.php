<?php 
    /*
         Proyecto 4.1: Definir una clase Tabla_articulos que gestione una colección de objetos Articulo.
                        Con encapsulamiento.
         Autor: Javier Rodríguez
         Fecha: 11/11/25
     */

    class Class_tabla_articulos {
        // Atributo privado:
        private $articulos;

        // Constructor
        public function __construct(){
            $this->articulos = [];              // Cada vez que creemos una instancia de Tabla_articulos, nos crea un array vacío.
        }
        // Getter
        public function get_articulos(){
            return $this->articulos; 
        }

        // Setter
        public function set_articulos($articulo){
            $this->articulos = $articulo; 
            return $this;
        }

        /* 
            Método para obtener el array de marcas únicas de los articulos.
            Este método devuelve un array de marcas, y simula una consulta SQL "SELECT * FROM marcas".
            Es estático porque no depende de una instancia concreta de la clase Tabla_articulos (no necesita un objeto para acceder a ellas).
        */
        public static function get_marcas(){
            return [
                "Samsung",
                "LG",
                "Sony",
                "Panasonic",
                "Toshiba",
                "Apple",
                "Huawei",
                "Xiaomi",
                "Nokia",
                "Motorola"
            ];
        }

        /* 
            Método para obtener el array de categorías únicas de los articulos.
            Este método devuelve un array de categorías, y simula una consulta SQL "SELECT * FROM categorias".
            Es estático porque no depende de una instancia concreta de la clase Tabla_articulos (no necesita un objeto para acceder a ellas).
        */
        public static function get_categorias(){
            return [
                "Televisión",
                "Telefonía",
                "Portátil",
                "Tablet",
                "Electrodoméstico",
                "Audio",
                "Videojuegos",
                "Cámara",
                "Accesorios",
                "Redes"
            ];
        }
        
        // Método para obtener datos:
        public function get_datos(){
            // Crear artículos de ejemplo:
            $articulo1 = new Class_articulo(1, "Televisión 4K", "X123", 1, [0, 4], 10, 799.99);
            $articulo2 = new Class_articulo(2, "Teléfono móvil", "P456", 5, [1], 15, 999.99);
            $articulo3 = new Class_articulo(3, "Portátil Gaming", "G789", 1, [2, 6], 5, 1299.99);
            $articulo4 = new Class_articulo(4, "Cámara réflex", "C101", 2, [7, 8], 8, 599.99);
            $articulo5 = new Class_articulo(5, "Tablet HD", "T012", 6, [3, 8], 20, 499.99);

            // Añadir los nuevos objetos a la tabla de artículos:
            $this->articulos[] = $articulo1;
            $this->articulos[] = $articulo2;
            $this->articulos[] = $articulo3;
            $this->articulos[] = $articulo4;
            $this->articulos[] = $articulo5;
        }

        /* Funcion para convertir array de indices de categorias a nombres de categorias.
            Parámetros: $indices -> array de indices de categorías (el del objeto ya instanciado).
            Retorno: Array de nombres de categorías.    
        */
        public static function categorias_indices_a_nombres($indices){
            //  Obtener array con todas las categorías:
            $todas_categorias = self::get_categorias();

            // Creamos un array para almacenar los nombres de las categorías:
            $nombres_categorias = [];

            // Recorremos el array de índices y obtenemos los nombres correspondientes:
            foreach ($indices as $indice){
                $nombres_categorias[] = $todas_categorias[$indice];
            }

            return $nombres_categorias;
        }

        /*
            metodo create()
            descripción: Añade un nuevo artículo a la Tabla_articulos. 
            parámetros: - objeto de la clase artículo (Vamos a indicar el nombre de la clase del objeto).
        */
        
            public function create(Class_articulo $articulo){
                $this->articulos[] = $articulo;
            }

            /*
                método: get_indice_from_id()
                descripción: obtiene el indice del array en el que se encuentra un artículo a partir del id
                parámetros: id del artículo
                retorno: indice del artículo en un array
            */
            public function get_indice_from_id($id_articulo){
                foreach($this->articulos as $indice => $articulo){
                    // Como en cada vuelta lo que hay es un objeto($articulo) usamos el get_id()
                    if ($articulo->get_id() == $id_articulo){
                        return $indice;
                    }
                }
                return null;
            }

            /*
                método: get_articulo_from_indice()
                descripción: obtiene un objeto de la clase artículo a partir del índice del array de tabla_articulos
                parámetros: indice en el que se encuentra el articulo
                retorno: objeto de la clase artículo
            */
            public function get_articulo_from_indice($indice){
                return $this->articulos[$indice];       // $this->articulos es un array de objetos --> Entonces devolverá el objeto que coincida con el índice que necesitamos
            }

            /*
                método: update()
                descripción: actualiza los detalles de un artículo en la tabla partir del indice en el que se encuentra dicho artículo
                parámetros: objeto de la clase articulo / indice del articulo.
            */
                // Cuando vas a pasar un objeto de una clase es bueno especificar a qué clase corresponde.
                public function update(Class_articulo $articulo, $indice){
                    $this->articulos[$indice] = $articulo;
                }

            /*
                método: delete()
                decripcion: elimina el artículo del array a partir del índice en el eqe se encuentra y reindexa el array
                parámetros: índice del array en el que se encuentra el artículo a eliminar.
                
            */
            public function delete($indice){
                unset($this->articulos[$indice]);
                $this->articulos = array_values($this->articulos);
            }
    }
?>
<?php
    /*
        clase: Class_conexion
        descripción: realiza la conexión con la base de datos maratoon
        parametros de conexión: constante definidas en la configuración de configDB.php
                - DB_HOST
                - DB_USER
                - DB_PASS
                - DB_NAME
    */
    
    class Class_conexion {

        // Atributos:
        public $mysqli;

        // Constructor:
        public function __construct(){
            // Habilitamos las excepciones de mysqli
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            try {
                
                // Conectamos con la bd
                $this->mysqli = new mysqli(
                    DB_HOST,
                    DB_USER,
                    DB_PASS,
                    DB_NAME
                );

                // Establecemos el set de caracteres (para que no se vean caracteres raros)
                $this->mysqli->set_charset("utf8mb4");

            } catch (mysqli_sql_exception $e){

                // Si se da error de conexión lo capturamos
                require_once 'views/errorDB.partial.php';
            }
        }
    }
?>
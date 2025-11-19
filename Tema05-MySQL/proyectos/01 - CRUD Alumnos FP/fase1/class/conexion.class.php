<?php
    /*
        clase: Class_conexion
        descripción: permite conectar con la base de datos fp
        parámetros de conexión:
            - server
            - user
            - pass
            - database
    */

        class Class_conexion{
            //Atributos
            public $server;
            public $user;
            public $pass;
            public $database;

            public $mysqli;     // Va a realizar la conexión (No se pone en el constructor)

            public function __construct(
                $server,
                $user,
                $pass,
                $database
            ){
                $this->server= $server;
                $this->user = $user;
                $this->pass = $pass;
                $this->database = $database;

                // Estructura try-catch
                try{
                    //Habilitamos las excepciones mysqli
                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                    //Realizamos la conexión
                    $this->mysqli = new mysqli(
                        $server,
                        $user,
                        $pass,
                        $database
                    );

                } catch (mysqli_sql_exception $e){
                    // Si hay algun error se mostrarán los detalles siguientes:
                    echo 'ERROR DE BASE DE DATOS' . '<br>';
                    echo 'Mensaje: ' . $e->getMessage() . '<br>';
                    echo 'Código de error: ' . $e->getCode() . '<br>';
                    echo 'Fichero: ' . $e->getFile() . '<br>';
                    echo 'Línea: ' . $e->getLine() . '<br>';
                    // Si hay algún error se va a parar la ejecución:
                    exit();
                }
            }

        }
?>
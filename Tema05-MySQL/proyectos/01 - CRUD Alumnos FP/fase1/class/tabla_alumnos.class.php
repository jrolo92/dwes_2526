<?php
    /*
        clase: Class_tabla_alumnos
        descripción: define la clase que va a permitir realizar el CRUD alumnos fp:
            - index
            - añadir
            - actualizar
            - eliminar
            - buscar
            - ordenar
        herencia: clase padre --> Class_conexion

    */
    
    // ésta clase va a ser hija de la clase conexión (y por tanto va a heredar de ella sus atributos y métodos).
    class Class_tabla_alumnos extends Class_conexion{
        /*
            metodo: get_alumnos()
            descripción: extrae los alumnos de la tabla alumno
            parámetros: ninguno.
            retorno: objeto de la clase mysqli_stmt (IMPORTANTE)
        */
        public function get_alumnos(){
            try{
                // INNER JOIN --> Usa la clave ajena de la primera tabla = a la clave principal de la segunda tabla
                $sql = "SELECT 
                            alumnos.id,
                            concat_ws(', ', alumnos.apellidos, alumnos.nombre) as alumno,
                            alumnos.email,
                            alumnos.nacionalidad,
                            alumnos.dni,
                            timestampdiff(YEAR, alumnos.fecha_nac, now()) as edad,
                            cursos.nombreCorto as curso
                        FROM alumnos INNER JOIN cursos
                        ON alumnos.curso_id = cursos.id
                        ORDER BY 1"
                ;

                // Prepare:
                $stmt = $this->mysqli->prepare($sql);

                // No necesita vincular parámetros

                // Ejecuto el comando
                $stmt->execute();

                // Devuelve un objeto de la clase mysqli_stmt
                return $stmt->get_result();

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
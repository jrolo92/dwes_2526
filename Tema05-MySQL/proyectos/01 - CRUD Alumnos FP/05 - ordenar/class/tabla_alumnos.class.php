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
class Class_tabla_alumnos extends Class_conexion
{
    /*
            metodo: get_alumnos()
            descripción: extrae los alumnos de la tabla alumno
            parámetros: ninguno.
            retorno: objeto de la clase mysqli_result (IMPORTANTE)
        */
    public function get_alumnos()
    {
        try {
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
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // No necesita vincular parámetros

            // Ejecuto el comando
            $stmt->execute();

            // Devuelve un objeto de la clase mysqli_result
            return $stmt->get_result();

        } catch (mysqli_sql_exception $e) {
            // Como este código va a ser el mismo para todas las estructuras vamos a hacer un partial
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();
        }
    }

    /*
        metodo: get_cursos()
        descripción: extrae los curso de la base de datos
        parámetros: ninguno.
        retorno: array asociativo con los cursos (id : nombreCorto)
    */
    public function get_cursos()
    {
        try {
            $sql = "SELECT
                            id,
                            nombreCorto as curso
                        FROM cursos
                        ORDER BY 1"
            ;

            // Prepare:
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // No necesita vincular parámetros

            // Ejecuto el comando
            $stmt->execute();

            // Crea un objeto de la clase mysqli_result
            $cursos = $stmt->get_result();

            /* Devuelve un array asociativo (se usa fetch_all porque los cursos van a ser siempre
                 los mismos y no se van a añadir nuevos como es el caso de los alumnos)*/
            return $cursos->fetch_all(MYSQLI_ASSOC);

        } catch (mysqli_sql_exception $e) {
            // Como este código va a ser el mismo para todas las estructuras vamos a hacer un partial
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();
        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)){
                $stmt->close();
            }
        }
    }

    /*
        método: create($alumno)
        descripción: inserta un objeto alumno en la tabla alumnos de la BD
        parámetros: objeto de la clase alumno
        retorno: id del nuevo alumno.
    */
    public function create(Class_alumno $alumno)
    {
        try {
            // Consulta preparada
            $sql = "INSERT INTO
                        alumnos (nombre, apellidos, email, telefono, nacionalidad, dni, fecha_nac, curso_id)
                    VALUES (?,?,?,?,?,?,?,?)"
            ;

            // Prepare
            $stmt = $this->mysqli->prepare($sql);

            // Vinculación de parámetros
            $stmt->bind_param(
                'sssssssi',
                $alumno->nombre,
                $alumno->apellidos,
                $alumno->email,       
                $alumno->telefono,
                $alumno->nacionalidad,
                $alumno->dni,
                $alumno->fecha_nac,
                $alumno->curso_id
            );

            // Ejecutamos la consulta:
            $stmt->execute();

            // Obtenemos el id del nuevo alumno insertado y lo devolvemos:
            $new_id = $this->mysqli->insert_id;
            return $new_id;

        } catch (mysqli_sql_exception $e) {
            // Como este código va a ser el mismo para todas las estructuras vamos a hacer un partial
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();
        }

    }

    /*
        método: read()
        descripción: muestra los detalles de un alumno a partir de su id (necesario para edit).
        parámetros: id del alumno
        retorno: ninguno
    */
    public function read($alumno_id){
        try{

            // Consulta preparada:
            $sql = "SELECT * FROM alumnos WHERE id = ? LIMIT 1";

            // Prepare:
            $stmt = $this->mysqli->prepare($sql);

            // Vinculamos parámetros
            $stmt->bind_param(
                'i',
                $alumno_id
            );

            // Ejecutamos la consulta:
            $stmt->execute();

        } catch (mysqli_sql_exception $e) {
            // Como este código va a ser el mismo para todas las estructuras vamos a hacer un partial
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();

        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)){
                $stmt->close();
            }
        }
    }

    /*
        método: update()
        descripción: actualiza los detalles de un alumno en la tabla alumnos de la bd a partir de su id
        parámetros: objeto de la clase alumno e id del alumno a editar
        retorno: ninguno.
    */
    public function update(Class_alumno $alumno, $alumno_id){
        try {
            // Consulta preparada:
            $sql= "UPDATE 
                        alumnos 
                   SET 
                        nombre = ?,
                        apellidos = ?,
                        email = ?,
                        telefono = ?,
                        nacionalidad = ?,
                        dni = ?,
                        fecha_nac = ?,
                        curso_id = ?
                    WHERE
                        id = ?                        
            ";

            // Prepare:
            $stmt = $this->mysqli->prepare($sql); 

            // Vinculación de parámetros:
            $stmt->bind_param(
                'sssssssii',
                $alumno->nombre,
                $alumno->apellidos,
                $alumno->email,
                $alumno->telefono,
                $alumno->nacionalidad,
                $alumno->dni,
                $alumno->fecha_nac,
                $alumno->curso_id,
                $alumno_id              // Parámetro introducido en la función.
            );

            // Ejecutamos la consulta preparada
            $stmt->execute();

        } catch (mysqli_sql_exception $e){
            // Como este código va a ser el mismo para todas las estructuras vamos a hacer un partial
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();

        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)){
                $stmt->close();
            }
        }
    } 

    /*
        método: delete()
        descripción: elimina una entrada de la tabla alumnos de la base de datos a partir de su id
        parámetros: el id del alumno a eliminar de la tabla
        retorno: ninguno 
    */
    public function delete($alumno_id){
        try{
            // Sentencia preparada
            $sql = "DELETE FROM alumnos WHERE id = ? LIMIT 1";

            // Prepare:
            $stmt = $this->mysqli->prepare($sql);

            // Vinculamos parámetros
            $stmt->bind_param(
                'i',
                $alumno_id
            );

            // Ejecutamos la consulta:
            $stmt->execute();

        } catch (mysqli_sql_exception $e){
            // Como este código va a ser el mismo para todas las estructuras vamos a hacer un partial
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();

        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)){
                $stmt->close();
            }
        }
    }

    
}
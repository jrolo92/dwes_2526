<?php
    /*
        clase: tabla_corredores.php
        descripción: va a permitir realizar el crud de corredores
        herencia: Class_conexion
    */

class Class_tabla_corredores extends Class_conexion
{
    /*
            método: get_corredores()
            descripción: extrae los corredores de la tabla corredores
            parámetros: ninguno.
            retorno: objeto de la clase mysqli_result
        */
    public function get_corredores()
    {
        try {
            // Sentencia sql
            $sql = "SELECT
                                corredores.id,
                                corredores.nombre,
                                corredores.apellidos,
                                corredores.ciudad,
                                corredores.email,
                                timestampdiff(YEAR, corredores.fechaNacimiento, now()) as edad,
                                categorias.nombrecorto as categoria,
                                clubs.nombreCorto as club
                            FROM corredores INNER JOIN categorias
                            ON corredores.id_categoria = categorias.id
                            INNER JOIN clubs ON corredores.id_club = clubs.id
                            ORDER BY 1
                ";

            // Prepare:
            $stmt = $this->mysqli->prepare($sql);

            // Ejecutamos:
            $stmt->execute();

            // Devolvemos los resultados (objeto de la clase mysqli_result)
            return $stmt->get_result();

        } catch (mysqli_sql_exception $e) {
            // Mostrar detalles en caso de error
            require_once 'views/partials/errorDB.partial.php';
            // Paramos la ejecución si hay algun error
            exit();

        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
            metodo: get_categorias()
            descripción: extrae las categorías de la base de datos
            parámetros: ninguno.
            retorno: array asociativo con las categorías (id : nombreCorto)
        */
    public function get_categorias()
    {
        try {
            $sql = "SELECT
                                id,
                                nombreCorto as categoria
                            FROM categorias
                            ORDER BY 1"
            ;

            // Prepare:
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // Ejecuto el comando
            $stmt->execute();

            // Crea un objeto de la clase mysqli_result
            $categorias = $stmt->get_result();

            /* Devuelve un array asociativo (se usa fetch_all porque los cursos van a ser siempre
                    los mismos y no se van a añadir nuevos como es el caso de los alumnos)*/
            return $categorias->fetch_all(MYSQLI_ASSOC);

        } catch (mysqli_sql_exception $e) {
            // Como este código va a ser el mismo para todas las estructuras vamos a hacer un partial
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();
        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
            metodo: get_clubs()
            descripción: extrae los clubs de la base de datos
            parámetros: ninguno.
            retorno: array asociativo con los clubs (id : nombreCorto)
        */
    public function get_clubs()
    {
        try {
            $sql = "SELECT
                                id,
                                nombreCorto as club
                            FROM clubs
                            ORDER BY 1"
            ;

            // Prepare:
            // Crear un objeto de la clase mysqli_stmt
            $stmt = $this->mysqli->prepare($sql);

            // No necesita vincular parámetros

            // Ejecuto el comando
            $stmt->execute();

            // Crea un objeto de la clase mysqli_result
            $clubs = $stmt->get_result();

            /* Devuelve un array asociativo (se usa fetch_all porque los cursos van a ser siempre
                    los mismos y no se van a añadir nuevos como es el caso de los alumnos)*/
            return $clubs->fetch_all(MYSQLI_ASSOC);

        } catch (mysqli_sql_exception $e) {
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();
        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
    }

    /*
        metodo: create()
        descripción: añade un nuevo corredor a la tabla corredores
        parámetros: un objeto de la Class_corredor
        retorno: ninguno
    */
    public function create(Class_corredor $corredor){
        try{
            // Sentencia SQL
            $sql = "INSERT INTO 
                            corredores (
                                nombre, 
                                apellidos,
                                ciudad,
                                email,
                                dni,
                                fechaNacimiento,
                                sexo,
                                id_categoria,
                                id_club
                            )
                        VALUES (?,?,?,?,?,?,?,?,?)
            ";

            // Prepare
            $stmt = $this->mysqli->prepare($sql);

            // Vinculamos parámetros
            $stmt->bind_param(
                'sssssssii',
                $corredor->nombre,
                $corredor->apellidos,
                $corredor->ciudad,
                $corredor->email,
                $corredor->dni,
                $corredor->fecha_nac,
                $corredor->sexo,
                $corredor->categoria_id,
                $corredor->club_id
            );

            // Ejecutamos la consulta:
            $stmt->execute();
        
        } catch (mysqli_sql_exception $e){
            // Si hay algun error se mostrarán los detalles siguientes:
            require_once 'views/partials/errorDB.partial.php';

            // Si hay algún error se va a parar la ejecución:
            exit();
        } finally {
            // Liberamos la sentencia preparada
            if (isset($stmt)) {
                $stmt->close();
            }
        }
        

    }
}

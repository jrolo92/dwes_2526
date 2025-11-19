<?php
    /*
        ejemplo 6.1: Conexión a BD PDO
    */

    // 1. Variables de conexión. (Normalmente se definen como constantes, ya que los valores no van a variar en la ejecución)
    $ip = '127.0.0.1:3306'; // Dirección ip y puerto
    $server = 'localhost';  // Nombre del servidor
    $user = 'root';
    $pass = null;           // También valdría cadena vacía
    $bd = 'fp';

    // ** EN LA CLASE PDO TENEMOS QUE USAR SIEMPRE UNA ESTRUCTURA TRY-CATCH ** //
    try{

        // 2. Establecemos la conexión mediante la función mysqli_connect y la guardamos en una vv
        $pdo = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // 3. Establecemos comando SQL:
        $sql= "select * from alumnos";

        // 4. Ejecutamos la sentencia SQL y devuelve un resultado de la clase PDOStatement
        $stmt = $pdo->query($sql);

        // 5. Mostrar resultados mediante:
        while ($fila = $stmt->fetch()){  // Devuelve un array asociativo con la fila
            echo $fila['id'] . ' - ' . $fila['nombre'] . ' - ' . $fila['apellidos'] . '<br>';     // Mostramos los datos necesarios
        }

    } catch (PDOException $e){                  // Si el try no se puede ejecutar va a devolver un objeto de la clase PDOException
        echo 'ERROR ' . $e->getMessage();       // Muestra el error de ese error.
    }

    // 6. Cerramos la conexión (la clase PDO no tiene metodo close()) dandole valor nulo.
    $pdo = null;

?>
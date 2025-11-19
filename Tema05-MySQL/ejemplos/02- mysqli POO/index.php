<?php
    /*
        ejemplo 6.1: Conexión a BD mysqli mediante la clase mysqli
    */

    // 1. Variables de conexión. (Normalmente se definen como constantes, ya que los valores no van a variar en la ejecución)
    $ip = '127.0.0.1:3306'; // Dirección ip y puerto
    $server = 'localhost';  // Nombre del servidor
    $user = 'root';
    $pass = null;           // También valdría cadena vacía
    $bd = 'fp';

    // 2. Establecemos la conexión mediante la función mysqli_connect y la guardamos en una vv
    $conexion = new mysqli($server, $user, $pass, $bd);

    // 3. Verificamos la conexión (si no conecta detiene el programa y da una descripción del error):
    if ($conexion->connect_error){                              // connect_error es un atributo de la clase mysqli, si todo va bien su valor será 0.
        die('ERROR de conexión'. $conexion->connect_error);
    }

    echo 'conectado con exito <br>';

    // 4. Confeccionamos la consulta SQL:
    $sql = 'select * from alumnos';                 // Sentencia SQL
    
    // Ejecutamos la sentencia SQL mediante el método query() y devuelve un objeto de la clase mysqli_result 
    $resultado = $conexion->query($sql);     // Busca la sentencia en la bd conectada

    // 5. Mostrar resultados mediante:
    while ($fila = $resultado->fetch_assoc()){  // Devuelve un array asociativo con la fila
        echo $fila['id'] . ' - ' . $fila['nombre'] . ' - ' . $fila['apellidos'] . '<br>';     // Mostramos los datos necesarios
    }

    // 6. Cerramos la conexión con el método close.
    $conexion->close();


?>
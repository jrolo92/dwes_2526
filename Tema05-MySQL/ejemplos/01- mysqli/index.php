<?php
    /*
        ejemplo 6.1: Conexión a BD mysqli
    */

    // 1. Variables de conexión. (Normalmente se definen como constantes, ya que los valores no van a variar en la ejecución)
    $ip = '127.0.0.1:3306'; // Dirección ip y puerto
    $server = 'localhost';  // Nombre del servidor
    $user = 'root';
    $pass = null;           // También valdría cadena vacía
    $bd = 'fp';

    // 2. Establecemos la conexión mediante la función mysqli_connect y la guardamos en una vv
    $conexion = mysqli_connect($server, $user, $pass, $bd);

    // 3. Verificamos la conexión (si no conecta detiene el programa y da una descripción del error):
    if (!$conexion){
        die('ERROR de conexión'. mysqli_connect_error());
    }

    echo 'conectado con exito <br>';

    // 4. Ejecutamos consulta a la tabla alumnos:
    $sql = 'select * from alumnos';                 // Sentencia SQL
    $resultado = mysqli_query($conexion, $sql);     // Busca la sentencia en la bd conectada

    // 5. Mostrar resultados:
    while ($fila = mysqli_fetch_assoc($resultado))  // Devuelve un array asociativo con la fila
        echo $fila['id'] . ' - ' . $fila['nombre'] . ' - ' . $fila['apellidos'] . '<br>';     // Mostramos los datos necesarios

    // 6. Cerramos la conexión
    mysqli_close($conexion);


?>
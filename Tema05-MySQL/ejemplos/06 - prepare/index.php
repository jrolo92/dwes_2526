<?php
    /*
        Ejemplo 4.1: Uso de conexión a base de datos con PDO.
    */

    // 1. Variables de conexión. (Normalmente se definen como constantes, ya que los valores no van a variar en la ejecución)
    $server = 'localhost';  // Nombre del servidor
    $user = 'root';
    $pass = null;           // También valdría cadena vacía
    $bd = 'fp';

    // Nombre de la fuente de datos:
    try {
        $dsn = "mysql:host=$server;dbname=$db;charset=utf8mb4";

        // Opciones de conexión (opcional)
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ];

        // 2. Crear un objeto de la clase PDO
        // Conexión con la bd
        $conexion = new PDO($dsn, $user, $pass, $options);

        echo "Conectado con éxito a la bd.<br>";

        // Sentencia sql con parametros:
        $sql= "SELECT * FROM alumnos WHERE id = :id";

        // Preparamos la consulta:
        // Obtenemos un objeto de la clase PDOStatement
        $stmt = $pdo->prepare($sql);

        // Asignamos un valor a la vv id
        $id = 1;
        // Vinculamos parámetros (Importante decirle el tipo de parametro que se espera --> en este caso un int):
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        //Ejecutamos la consulta:
        $stmt->execute();

        //Devolvemos los resultados.
        $resultados = $stmt->fetch_all();

        
    } catch (PDOException $e){
        echo 'error de conexión: ' . $e->getMessage();
    }
    

    
?>
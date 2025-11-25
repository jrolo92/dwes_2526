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

        // 2. Crear un objeto de la clase PDO
        // Conexión con la bd
        $conexion = new PDO($dsn, $user, $pass);

        // 3. Configuramos el modo error de PDO a excepción:
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado con éxito a la bd.<br>";
    } catch (PDOException $e){
        echo 'error de conexión: ' . $e->getMessage();
    }
    

    
?>
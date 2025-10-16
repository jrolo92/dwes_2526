<?php
    /*
        Ejemplo 3.11: Array de tipo asociativo
        Descripción: El índice está formado por un string
    */

    $persona = array (
        "nombre" => "Ana",
        "apellidos" => "García López",
        "edad" => 28,
        "altura" => 1.65
    );

    echo "Nombre: " . $persona["nombre"] . "<br>";
    echo "Apellidos: " . $persona["apellidos"] . "<br>";
    echo "Edad: " . $persona["edad"] . "<br>";
    echo "Altura: " . $persona["altura"] . "<br>";

    // Se puede imprimir con la clave directamente usando un foreach 
    foreach($persona as $clave => $valor){
        echo "$clave: $valor <br>";
    }

?>
<?php


    /*
       Ejemplo 4.6: Uso de atributos y métodos estáticos en una clase
       Autor: Javier Rodríguez
       Fecha: 06/11/2025

    */
    // Incluir la definicion de la clase estática:
    include_once ("class/estatica.class.php");

    // Crear un objeto de la clase película
    $pelicula1 = new Class_pelicula(1, "El laberinto del fauno");

    // Mostrar el país usando el método no estático (correcto)
    echo "País (método no estático): " . $pelicula1->mostrarPais();

    // Mostrar el país usando el método estático (correcto)
    echo "País (método estático): " . Class_pelicula::mostrarPaisEstatico();

?>
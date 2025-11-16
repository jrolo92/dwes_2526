<?php 
    /*
            Modelo: index.model.php
            Descripción: Modelo Princiapl del proyecto CRUD de artículos POO.
    */
    
    # Símbolo de moneda local:
    setlocale(LC_MONETARY, 'es_ES.UTF-8');

    // Creamos un objeto de la clase tabla_articulos:
    $tabla_articulos = new Class_tabla_articulos();

    // Obtenemos los datos de los artículos:
    $tabla_articulos->get_datos();

    // Obtener el array de objetos de la clase artículos:
    $articulos = $tabla_articulos->get_articulos();

    // Obtener las categorias disponibles:
    $categorias = Class_tabla_articulos::get_categorias();

    // Obtener las marcas disponibles:
    $marcas = Class_tabla_articulos::get_marcas();
?>
<?php
    /*
        Actividad 3.7   
        Controlador: order.php ordena la tabla de libros en función de un criterio
        Descripción: Recibe el criterio de ordenación mediante URL y carga el modelo correspondiente para obtener la lista de libros ordenada
                     Finalmente carga la vista para mostrar los libros ordenados.
        Autor: Javier Rodríguez López  
        Fecha: 27/10/2025

        Método GET(URL):
            - criterio: de qué forma se va a ordenar.
            - ejemplo: order.php?criterio=titulo
    */
    
    // Librerías
    require_once "libs/functions.php";

    // Modelo
    require_once "models/order.model.php";
        
    // Vista
    require_once "views/index.view.php";                     


?>
<?php
    /*
        Actividad 3.5   
        Controlador: update.php Actualiza un libro del array que se ha modificado
        Descripción: actualiza el libro correspondiente del array. Luego carga la vista index.view para mostrar los libros
        Autor: Javier Rodríguez López  
        Fecha: 23/10/2025

        Método GET(URL):
            - id:Identificador del libro a eliminar.
            - ejemplo: .php?id=3
    */
    
    // Librerías
    require_once "libs/functions.php";

    //Modelo
    require_once "models/update.model.php";
        
    //Vista
    require_once "views/index.view.php";                          


?>
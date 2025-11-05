<?php
    /*
        Actividad 3.4   
        Controlador: delete.php Elimina un libro del array en función de su id
        Descripción: recibe un parámetro 'id' a través de su URL (get) y elimina el libro correspondiente del array. Luego carga la vista index.view para mostrar los libros
        Autor: Javier Rodríguez López  
        Fecha: 23/10/2025

        Método GET(URL):
            - id:Identificador del libro a eliminar.
            - ejemplo: delete.php?id=3
    */
    
    // Librerías
    require_once "libs/functions.php";

    //Modelo
    require_once "models/delete.model.php";
        
    //Vista
    require_once "views/index.view.php";                          


?>
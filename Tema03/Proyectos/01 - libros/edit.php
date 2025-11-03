<?php
    /*
        Actividad 3.5   
        Controlador: edit.php edita un libro del array en función de su id
        Descripción: recibe un parámetro 'id' a través de su URL (get) y muestra un formulario con los datosd el libro a editar
        Autor: Javier Rodríguez López  
        Fecha: 23/10/2025

        Método GET(URL):
            - id:Identificador del libro a eliminar.
            - ejemplo: edit.php?id=3
    */
    
    // Librerías
    require_once "libs/functions.php";

    //Modelo
    require_once "models/edit.model.php";
        
    //Vista
    require_once "views/edit.view.php";                     


?>
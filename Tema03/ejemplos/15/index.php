<?php

    /*
        Archivo: controlador principal
        Descripcion: usod e funcion con array como parámetro
    */

    include "libs/function.php";

        // Modelo 
        $alumno = [
            'nombre' => 'Ana',
            'apellidos' => 'García López',
            'edad' => 21,
            'curso' => 'Ingeniería Informática'
        ];

        mostrar_alumnos($alumno);

        $alumno1 = [
            'nombre' => 'Ana',
            'apellidos' => 'García López',
            'curso' => 'Ingeniería Informática'
        ];

        mostrar_alumnos($alumno1);

        // De esta forma se consigue que todos los parámetros sean opcionales
?>
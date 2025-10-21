<?php
    /*
        Ejemplo 3.15
        Archivo function.php
        Descripción: Uso de un array como parámetro de una función

    */

        function mostrar_alumnos($alumno=[]){

            if (array_key_exists('nombre', $alumno)){
                echo "Nombre: " . $alumno['nombre'] . "<br>";
            }
            if (array_key_exists('apellidos', $alumno)){
                echo "Apellidos: " . $alumno['apellidos'] . "<br>";
            }            
            if (array_key_exists('edad', $alumno)){
                echo "Edad: " . $alumno['edad'] . "<br>";
            }
            if (array_key_exists('curso', $alumno)){
                echo "Curso: " . $alumno['curso'] . "<br>";
            }
        }
?>
<?php
    /*
        Ejemplo 3.2. if ... else if
        Descripción: Determinar la calificación de un exámen cuya nota esta comprendida entre 0 y 10.
        La calificación será:

            -Suspenso: nota < 5
            -Suficiente: 5 - 6
            -Bien: 6 <= nota < 7
            -Notable: 7 <= nota < 9
            -Sobresaliente: 9 <= nota <= 10
    */

    // Nota del examen:
    $nota = 7;

    // Determinamos la calificación según la nota (usando if else)
    
    if ($nota < 5) {
        echo "Suspenso";
    } else if ($nota < 6) {
        echo "Suficiente";
    } else if ($nota < 7) {
        echo "Bien";
    } else if ($nota < 9) {
        echo "Notable";
    } else {
        echo "Sobresaliente";
    }
?>
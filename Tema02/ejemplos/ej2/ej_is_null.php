<?php

/*
    ejemplo 2.20
    29/09
    Uso de la función is_null()
    is_null da warning cuando la vv no ha sido declarada
*/

    // Si la vv es nula
    $var1 = null;
    if(is_null($var1)){
        echo "<p>var1 es nula</p>";
    }  else {
        echo "<p>var1 no es nula</p>";
    }

    // Si la vv esta iniciada
    $var2 = 3.1416;
    if(is_null($var2)){
        echo "<p>var2 es nula</p>";
    }  else {
        echo "<p>var2 no es nula</p>";
    }

    // Si la variable aun no se ha creado
    if(is_null($var3)){
        echo "<p>var3 es nula</p>";
    }  else {
        echo "<p>var3 no es nula</p>";
    }
    
    // Si la variable no esta inicializada
    $var4;
    if(is_null($var4)){
        echo "<p>var4 es nula</p>";
    }  else {
        echo "<p>var4 no es nula</p>";
    }

    // Si la vv está inicializada pero vacía;
    $var5 = "";
    if(is_null($var5)){
        echo "<p>var5 es nula</p>";
    }  else {
        echo "<p>var5 no es nula</p>";
    }

    $var6 = "Hola";
    unset ($var6);
        $var5 = "";
    if(is_null($var6)){
        echo "<p>var6 es nula</p>";
    }  else {
        echo "<p>var6 no es nula</p>";
    }
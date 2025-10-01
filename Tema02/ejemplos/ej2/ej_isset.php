<?php

    /*
        ejemplo isset
        30/09/25
        isset no da warnings cuando la vv no ha sido declarada
    */

    $var1 = null;
    if(isset($var1)){
        echo "<p>var1 es nula</p>";
    }  else {
        echo "<p>var1 no es nula</p>";
    }

    $var2 = 3.1416;
    if(isset($var2)){
        echo "<p>var2 esta definida</p>";
    }  else {
        echo "<p>var2 no esta definida</p>";
    }

    if(isset($var3)){
        echo "<p>var1 esta definida</p>";
    }  else {
        echo "<p>var1 no esta definida</p>";
    }

    $var4; //Esta vv será nula
    if(isset($var4)){
        echo "<p>var4 esta definida</p>";
    }  else {
        echo "<p>var4 no esta definida</p>";
    }

    $var5 = "";
    if(isset($var5)){
        echo "<p>var5 es nula</p>";
    }  else {
        echo "<p>var5 no es nula</p>";
    }

    $var6 = "Hola";
    unset($var6); //Borra la vv y limpia la memoria (buscar bien que hace).
    if(isset($var6)){
        echo "<p>var6 es nula</p>";
    }  else {
        echo "<p>var6 no es nula</p>";
    }
?>
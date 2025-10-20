<?php

// ejemplo 3.9: Uso del FOR. Mostrar los números del 1 al 100, por columnas, de forma que queden 10 números por columna.
// Esto sería el modelo
$numeros = 10;



?>

<!-- Esto sería la vista  -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <!-- CSS Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <!-- Icono -->
            <i class="bi bi-grid-3x3"></i>
            <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
            <span class="fs-6">Tabla de Multiplicar</span>
        </header>

        <!-- Contenido principal -->
        <main>
            <!-- Creamos la tabla  -->
            <table class="table">
                <thead>
                    <tr>
                        <th></th>       
                        <?php
                            for ($i=0; $i <=$numeros ; $i++){
                                echo "<th>$i</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i=0;$i<=$numeros; $i ++){
                            echo "<tr>"; //Nueva fila
                            echo "<th>$i</th>"; // Columna principal en negrita porque usamos <th>
                            for ($j=0; $j<=$numeros; $j ++){
                                $multiplicacion = $i * $j;          // Multiplicamos fila * columna
                                echo "<td>$multiplicacion</td>";    // Lo mostramos
                            }
                            echo "</tr>"; // CErramos fila
                        }
                    ?>
                </tbody>
            </table>
        </main>

        <!-- Pie de página -->
        <footer class="footer mt-auto py-3  fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2025
                    Javier Rodríguez López - DWES - 2º DAW - Curso 25/26</span>
            </div>
        </footer>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
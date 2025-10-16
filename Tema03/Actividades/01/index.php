<?php

// ejemplo 3.9: Uso del FOR. Mostrar los números del 1 al 100, por columnas, de forma que queden 10 números por columna.
// Esto sería el modelo
$numeros = 10;
$columnas = 10;


?>

<!-- Esto sería la vista  -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Básica Bootstrap 5.3.8.</title>
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
            <i class="bi bi-stack"></i>
            <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
            <span class="fs-6">Tabla números del 1 al 100</span>
        </header>

        <!-- Contenido principal -->
        <main>
            <!-- Creamos la tabla  -->
            <table class="table">

                <tbody>
                    <?php for ($i = 1; $i <= $numeros; $i++): ?>
                        <thead>
                            <tr>
                                <th> </th>
                                <th scope="col"><?php $i ?></th>
                            </tr>
                        </thead>
                        <!-- Detecta el primero de la fila  -->
                        <?php if (($i - 1) % $columnas == 0): ?>
                            <tr>
                            <?php endif; ?>
                            <!-- Si no es el primero muestra el número  -->
                            <td> <?= $i ?> </td>
                            <!-- Detecta final de cada fila  -->
                            <?php if ($i % $columnas == 0): ?>
                            </tr>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tbody>
            </table>


            <!-- <table class="table"> 
                <tbody>
                    <?php for ($i = 1; $i <= $numeros; $i++): ?>
                         Detecta el primero de la fila  
                        <?php if (($i - 1) % $columnas == 0): ?>                
                            <tr>
                        <?php endif; ?>
                        Si no es el primero muestra el número  
                        <td> <?= $i ?> </td>
                         Detecta final de cada fila  
                         <?php if ($i % $columnas == 0): ?>
                            </tr>
                        <?php endif; ?>
                    <?php endfor; ?>
                </tbody>
            </table>-->


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
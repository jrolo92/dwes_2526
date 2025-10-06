<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de lanzamiento de proyectiles</title>

    <!-- CSS Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Bootstrap Icons 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">
        
        <!-- Cabecera del documento -->
        <header class="pb-3 mb-4 border-bottom">
            <!-- Icono -->
            <i class="bi bi-rocket-takeoff-fill"></i>
            <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
            <span class="fs-6">Proyecto 2.2 - Lanzamiento de Proyectiles</span>
            <h2>Resultado</h2>
        </header>

        <!-- Contenido principal -->
        <main>
            <!-- Formulario de la calculadora básica -->
            <form method="post">

              <!-- Tabla 1: Valores Iniciales -->
              <div class="container">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Valores iniciales:  </th>
                      <th>  </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Velocidad inicial:  </td>
                      <td><?= number_format($valor1, 2) . " m/s" ?></td>
                    </tr>
                    <tr>
                      <td>Ángulo inclinación (en º):  </td>
                      <td><?= $valor3 . " º" ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Tabla 2: Resultados -->
              <div class="container">    
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Resultados: </th>
                      <th>  </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ángulo (en radianes):  </td>
                      <td><?= number_format($valor2, 5) . " rads"?></td>
                    </tr>          
                    <tr>
                      <td>Velocidad inicial X:  </td>
                      <td><?= number_format($vox, 2) . " m/s"?></td>
                    </tr>
                    <tr>
                      <td>Velocidad inicial Y:  </td>
                      <td><?= number_format($voy, 2) . " m/s"?></td>
                    </tr>
                    <tr>
                      <td>Alcance Máximo del Proyectil:  </td>
                      <td><?= number_format($xmax, 2) . " m"?></td>
                    </tr>
                    <tr>
                      <td>Tiempo de vuelo:  </td>
                      <td><?= number_format($tiempo, 2) . " s" ?></td>
                    </tr>
                    <tr>
                      <td>Altura Máxima del Proyectil:  </td>
                      <td><?= number_format($ymax, 2) . " m"?></td>
                    </tr>       
                  </tbody>
                </table>
              </div>
                <!-- Botones de acción  -->
              <div class="btn-group" role="group">
                <a class="btn btn-primary" href="index.php" role="button">Volver</a>
              </div> 
            </form> 

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
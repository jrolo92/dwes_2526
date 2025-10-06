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
        </header>

        <!-- Contenido principal -->
        <main>
            <!-- Formulario -->
            <form method="post">

                <!-- Velocidad inicial: -->
                <div class="mb-3">
                    <label class="form-label" for="velocidad_inicial">Velocidad inicial (m/s):</label>
                    <input type="number" class="form-control" step="1" placeholder="0" aria-describedBy="helId name="velocidad_inicial"> <!-- El valor name es el mas importante ya que con el vamos a rescatar el valor que se le haya asignado -->
                    <small id="helpId" class="text-muted">Introduzca el primer valor</small>
                </div>

                <!-- Angulo de lanzamiento: -->
                <div class="mb-3">
                    <label class="form-label" for="angulo_lanzamiento">Angulo de Lanzamiento:</label>
                    <input type="number" class="form-control" step="1" placeholder="0" aria-describedBy="helId name="angulo_lanzamiento"> <!-- El valor name es el mas importante ya que con el vamos a rescatar el valor que se le haya asignado -->
                    <small id="helpId" class="text-muted">Ángulo en grados</small>
                </div>
                
                <!-- Botones de acción -->
                 <hr>
                <div class="btn-group" role="group">
                    <button type=reset class="btn btn-secondary">Borrar</button>
                    <!-- En formaction le decimos que archivo tiene que coger para hacer la operacion (el controlador) -->
                    <button type=submit class="btn btn-warning" formaction="calcular.php">Calcular Lanzamiento</button> 

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


<!-- 

    Clases de botones en bootstrap:
    btn-primary: botón azul para acciones principales
    btn-secondary: gris para acciones secundarias
    btn-success: verde para indicar éxito
    btn-danger: rojo para advertencias o errores
    btn-warning: amarillo para precauciones
    btn-info: celeste para información adicional
    btn-light: fondo claro
    btn-dark: fondo oscuro
    btn-link: se ve como un enlace

-->
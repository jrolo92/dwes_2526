<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Tema 2</title>
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
            <i class="bi bi-activity"></i>

            <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
            <span class="fs-6">Cálculo Circuito Eléctrico - Ley de Ohm</span>
        </header>

        <!-- Contenido principal -->
        <main>
            <h4>Datos de entrada</h4>
            <!-- Creamos el formulario:  -->
            <form method="post">
                <!-- Pedimos al usuario el primer parámetro:  -->
                <div class="mb-3">
                    <label for="voltaje" class="form-label">Voltaje: </label>
                    <input type="number" class="form-control" aria-describedby="helpId" name="voltaje">
                    <small id="helpId" class="form-text">Introduzca el voltaje en voltios (v)</small>
                </div>
                <!-- Pedimos al usuario el segundo parámetro:  -->
                <div class="mb-3">
                    <label for="resistencia" class="form-label">Resistencia: </label>
                    <input type="number" class="form-control" aria-describedby="helpId" name="resistencia">
                    <small id="helpId" class="form-text">Introduzca la resistencia en ohmios (Ω)</small>
                </div>

                <!-- Vamos a crear dos botones uno para realizar el cálculo y otro para resetear:  -->
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-primary" type="submit" formaction="calcular.php">Calcular</button>
                    <button class="btn btn-primary" type="reset">Borrar</button>
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
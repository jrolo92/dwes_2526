<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>

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
            <i class="bi bi-calculator"></i>
            <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
            <span class="fs-6">Proyecto 2.1 - Calculadora Básica PHP</span> 
        </header>

        <!-- Contenido principal -->
        <main>
            <!-- Formulario de la calculadora básica -->
            <form method="post">

                <!-- Valor 1: -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Valor 1:</span>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00" name="valor1"> <!-- El valor name es el mas importante ya que con el vamos a rescatar el valor que se le haya asignado -->
                    <small class="text-muted">Introduzca el primer valor</small>
                </div>

                <!-- Valor 2: -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Valor 2:</span>
                    <input type="number" class="form-control" step="0.01" placeholder="0.00" name="valor2"> <!-- El valor name es el mas importante ya que con el vamos a rescatar el valor que se le haya asignado -->
                    <small class="text-muted">Introduzca el segundo valor</small>
                </div>
                
                <!-- Botones de acción -->
                <div class="btn-group" role="group">
                    <button type=reset class="btn btn-secondary">Limpiar</button>
                    <button type=submit class="btn btn-primary" formaction="sumar.php">Sumar</button> <!-- En formaction le decimos que archivo tiene que coger para hacer la operacion (el controlador) -->
                    <button type=submit class="btn btn-primary" formaction="restar.php">Restar</button>
                    <button type=submit class="btn btn-primary" formaction="producto.php">Producto</button>
                    <button type=submit class="btn btn-primary" formaction="division.php">División</button>
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 4.1 - Calculadora Básica</title>
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
            <i class="bi bi-stack"></i>
            <!-- Esta etiqueta va a facilitar la búsqueda de la pag en los buscadores, mejorando el SEO -->
            <span class="fs-6">Proyecto 4.1 - Calculadora Básica</span> 
        </header>

        <!-- Barra de Navegacion (NavBar) -->

        <!-- Contenido principal -->
        <main>
            <!-- Formulario de la calculadora -->
            <form method="get" action="">
            <div class="mb-3">
                <label for="valor1" class="form-label">Valor 1</label>
                <input type="number" class="form-control" id="valor1" step="0.01" placeholder="0.00" name="valor1" value="<?= $calculadora->getValor1() ?>" disabled> <!-- IMPORTANTE: incluir el value desde la clase-->
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Valor 2</label>
                <input type="number" class="form-control" id="valor2" step="0.01" placeholder="0.00" name="valor2" value="<?= $calculadora->getValor2() ?>" disabled> <!-- IMPORTANTE: incluir el value desde la clase-->
            </div>
            <div class="mb-3">
                <label for="operacion" class="form-label">Operación</label>
                <input type="text" class="form-control" id="operacion" name="operacion" value="<?= $calculadora->getOperacion() ?>" disabled> <!-- IMPORTANTE: incluir el value desde la clase-->
            </div>
            <div class="mb-3">
                <label for="resultado" class="form-label">Resultado</label>
                <input type="number" class="form-control" id="resultado" step="0.01" placeholder="0.00" name="resultado" value="<?= $calculadora->getResultado() ?>" disabled> 
            </div>
            <!-- Botones de acción -->
            <a href="index.php" class="btn btn-secondary">Volver</a>
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
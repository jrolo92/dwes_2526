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

        <!-- Barra de NAvegacion (NavBar) -->

        <!-- Contenido principal -->
        <main>
            <!-- Formulario de la calculadora -->
            <form method="get" action="calculadora.php">
            <div class="mb-3">
                <label for="valor1" class="form-label">Valor 1</label>
                <input type="number" class="form-control" id="valor1" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor1"> <!-- IMPORTANTE: los 3 últimos valores-->
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Valor 2</label>
                <input type="number" class="form-control" id="valor2" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor2"> <!-- IMPORTANTE: los 3 últimos valores-->
            </div>
            <!-- Botones de acción -->
            <button type="reset" class="btn btn-secondary">Limpiar</button>
            <!-- Cada botón envía un valor distinto en el parámetro 'operacion' -->
            <button type="submit" class="btn btn-warning" name="operacion" value="sumar">Sumar</button>
            <button type="submit" class="btn btn-danger" name="operacion" value="restar">Restar</button>
            <button type="submit" class="btn btn-success" name="operacion" value="multiplicar">Multiplicar</button>
            <button type="submit" class="btn btn-primary" name="operacion" value="dividir">Dividir</button>
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
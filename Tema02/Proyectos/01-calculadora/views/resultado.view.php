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
            <p>Resultado</p> 
        </header>

        <!-- Contenido principal -->
        <main>
            <!-- Formulario de la calculadora básica -->
            <form>

                <!-- Valor 1: -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Valor 1:</span>
                    <input type="number" class="form-control" value="<?= $valor1 ?>" step="0.01"> <!-- En el parámetro value vamos a meter la vv que es $valor1 que hemos recogido en el modelo -->
                </div>

                <!-- Valor 2: -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Valor 2:</span>
                    <input type="number" class="form-control" value="<?= $valor2 ?>" step="0.01"> <!-- En el parámetro value vamos a meter la vv que es $valor1 que hemos recogido en el modelo -->
                </div>

                <!-- Resultado: -->
                <div class="input-group mb-3">
                    <span class="input-group-text"><?= $operacion ?></span>
                    <input type="number" class="form-control" value="<?= $resultado ?>" step="0.01"> <!-- En el parámetro value vamos a meter la vv que es $valor1 que hemos recogido en el modelo -->
                </div>
                
                <!-- Botones de acción -->
                 <div class="btn-group" role="group">
                    <a class="btn btn-primary" href="index.php" role="button">Nueva operación</a>
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
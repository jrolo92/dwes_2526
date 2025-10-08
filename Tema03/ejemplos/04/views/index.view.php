<!-- Vista  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Básica Bootstrap 5.3.8.</title>
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
            <span class="fs-6">Plantilla Básica Bootstrap 5.3.8</span> 
        </header>

        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item"><a class= "nav-link" href="#">Inicio</a></li> <!-- El menú inicio sale para todos -->
                <!-- Si el perfil es admin mostramos un menú de administración, si no un menú de usuario -->
                <?php if ($perfil == "admin"): ?>
                    <li class="nav-item"><a class="nav-link active" href="#">Administración</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gestión Usuarios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Gestión Productos</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
            </ul>
        </nav>

        <!-- Contenido principal -->
        <main>

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
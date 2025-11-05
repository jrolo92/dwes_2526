<!DOCTYPE html>
<html lang="es">

<head>
   
    <!-- Cargar bootstrap -->
   <?php include_once 'views/layouts/head.layout.php'; ?>
    <title> Proyecto - CRUD Gestión Películas</title>
    
</head>

<body>

    <!-- capa principal -->
    <div class="container mt-3">

        <!-- cabecera del documento -->
       <?php include_once 'views/partials/header.partial.php'; ?>

        <!-- Navegador o menu libros -->
        <?php include_once 'views/partials/menu.partial.php'; ?>

        <!-- contenido principal -->
        <main>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="txt-end">Id</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Idioma</th>
                            <th scope="col">Director</th>
                            <th scope="col">Género</th>
                            <th scope="col" class="text-end">Año</th>
                            <th scope="col" class="text-end">Recaudación</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!-- foreach peliculas -->
                            <tr>
                                <?php foreach($peliculas as $pelicula): ?>
                                <th scope="row" class="text-end"><?= $pelicula['id']; ?></th>
                                <td><?= $pelicula['titulo']; ?></td>
                                <td><?= $pelicula['idioma']; ?></td>
                                <td><?= $pelicula['director']; ?></td>
                                <td>
                                    <?= 
                                        // Mostrar géneros separados por comas
                                        implode(', ', $pelicula['generos']); 
                                    ?>
                                </td>
                                <td class="text-end"><?= $pelicula['anio']; ?></td>
                                <td class="text-end"><?= number_format($pelicula['recaudacion'] / 1000000, 2); ?> USD</td>
                                
                                <!-- botones de acción -->
                                <td>
                                    <!-- boton eliminar -->
                                    <a href="delete.php?id=<?= $pelicula['id']; ?>" class="btn btn-danger btn-sm" title="Eliminar">
                                        <i class="bi bi-trash3"></i>
                                    </a>
                                    <!-- boton editar -->
                                    <a href="edit.php?id=<?= $pelicula['id']; ?>" class="btn btn-primary btn-sm" title="Editar">
                                        <i class="bi bi-pencil-square"></i>
                                    <!-- boton ver -->
                                    <a href="show.php?id=<?= $pelicula['id']; ?>" class="btn btn-info btn-sm" title="Ver">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        <!-- fin foreach -->
                         <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Total películas:<?= count($peliculas) ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </main>

        <!-- pie de página -->
        <?php include_once 'views/partials/footer.partial.php'; ?>
    </div>

    <!-- javaScript bootstrap 5.3.8 -->
    <?php include_once 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>
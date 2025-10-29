<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "partials/head.partial.php"; ?>
    <title>Gestión de Artículos</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>
            <h1>Proyecto 3.2 - Gestión de Artículos</h1>
            <small>Tabla Artículos</small>

            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-end">Id</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Categoría</th>
                        <th scope="col" class="text-end">Unidades</th>
                        <th scope="col" class="text-end">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articulos as $articulo): ?>
                        <tr>
                            <td class="text-end"><?= $articulo['id'] ?></td>
                            <td><?= $articulo['descripcion'] ?></td>
                            <td><?= $articulo['modelo'] ?></td>
                            <td><?= categoriaNombre($categorias, $articulo['categoria_id']); ?></td>
                            <td class="text-end"><?= $articulo['unidades'] ?></td>
                            <td class="text-end"><?= number_format($articulo['precio'], 2) ?> €</td>
                            <td>
                                <!-- Botón de editar -->
                                <a href="edit.php?id=<?= $articulo['id']?>" class="btn btn-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>

        <!-- Pie de página -->
        <?php require_once "partials/footer.partial.php"; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once "partials/jsbootstrap.partial.php"; ?>
</body>

</html>
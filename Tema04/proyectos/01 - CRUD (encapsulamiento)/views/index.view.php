<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "layouts/head.layout.php"; ?>
    <title>Gestión de Artículos</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>
            <h1>Proyecto 4.1 - CRUD Artículos (con encapsulamiento)</h1>

            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-end">Id</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Categorías</th>
                        <th scope="col" class="text-end">Unidades</th>
                        <th scope="col" class="text-end">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cada iteración obtiene un objeto. $articulos es un array de objetos ($articulo es un objeto en cada iteración) -->
                    <?php foreach ($articulos as $articulo): ?>
                        <tr>
                            <td class="text-end"><?= $articulo->get_id() ?></td>
                            <td><?= $articulo->get_descripcion() ?></td>
                            <td><?= $articulo->get_modelo() ?></td>
                            <td><?= $marcas[$articulo->get_marca()]; ?></td>
                            <td><?= implode(', ', Class_tabla_articulos::categorias_indices_a_nombres($articulo->get_categorias())) ?></td>
                            <td class="text-end"><?= $articulo->get_unidades() ?></td>
                            <td class="text-end"><?= number_format($articulo->get_precio(), 2, ',', '.') ?> €</td>
                            <td>
                                <!-- Acciones: Siempre vamos a enviar enlaces de tipo Get dinámico con el id del articulo con el que vamos a trabajar -->
                                <!-- Boton de borrar  -->
                                <a href="delete.php?id=<?= $articulo->get_id() ?>" class= "btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('Confirmar eliminación de artículo')">
                                    <i class="bi bi-trash3"></i>
                                </a>
                                <!-- Botón de editar -->
                                <a href="edit.php?id=<?= $articulo->get_id() ?>" class="btn btn-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <!-- Botón mostrar -->
                                <a href="show.php?id=<?= $articulo->get_id() ?>" class="btn btn-info btn-sm" title="Mostrar">
                                <i class="bi bi-eye-fill"></i>
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
    <?php require_once "layouts/jsbootstrap.layout.php"; ?>
</body>

</html>
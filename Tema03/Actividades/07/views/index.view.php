<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Cargar head (Bootstrap) -->
    <?php require_once "views/layouts/head.layout.php"; ?>
    <title>Gestión Libros</title>

</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "views/partials/header.partial.php"; ?>

        <!-- Barra de Navegacion (NavBar) -->
        <?php require_once "views/partials/menu.partial.php"; ?>

        <!-- Contenido principal -->
        <main>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col" class="text-end">ID</th>
                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Género</th>
                        <th scope="col" class="text-end">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($libros as $libro): ?>
                        <tr>
                            <td class="text-end"><?= $libro['id'] ?></td>
                            <td><?= $libro['titulo'] ?></td>
                            <td><?= $libro['autor'] ?></td>
                            <td><?= $libro['editorial'] ?></td>
                            <td><?= $libro['genero'] ?></td>
                            <td class="text-end"><?= number_format($libro['precio'], 2, ',') ?> €</td>

                            <!-- Botones de accion  -->
                            <td>
                                <!-- Boton de eliminar -->
                                 <!-- Se le pasa un enlace de tipo Get dinámico para que en cada caso borre el el libro que corresponda "delete.php?id=<?= $libro['id']?>" -->
                                <a href="delete.php?id=<?= $libro['id']?>" class="btn btn-danger btn-sm" title="Eliminar">
                                    <i class="bi bi-trash3"></i>
                                </a>
                                <!-- Botón editar  -->
                                <a href="edit.php?id=<?= $libro['id']?>" class="btn btn-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <!-- Botón de mostrar-->
                                <a href="edit.php?id=<?= $libro['id']?>" class="btn btn-info btn-sm" title="Mostrar">
                                <i class="bi bi-eye-fill"></i>
                                </a>                                 

                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">Total libros: <?= count($libros) ?></td>
                    </tr>
                </tfoot>
            </table>
        </main>

        <!-- Pie de página -->
        <?php require_once 'views/partials/footer.partial.php'; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
     <?php require_once 'views/layouts/js_bootstrap.layout.php'; ?>
</body>

</html>
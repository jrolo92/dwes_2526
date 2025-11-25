<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php require_once "layouts/head.layout.php"; ?>
    <title>Proyecto 5.2 - CRUD Corredores</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>

            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>

            <table class="table">
                <!-- Cabecera de la tabla  -->
                <thead>
                    <tr>
                        <th scope="col" class="text-end">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Email</th>
                        <th scope="col" class="text-end">Edad</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Club</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Esto se puede hacer de dos formas: -->
                    <!-- Con un while: -->
                    <?php while($corredor = $corredores->fetch_assoc()): ?>
                        <tr>
                            <!-- Vamos a usar las columnas de la tabla de la consulta SQL  -->
                            <td class="text-end"><?= $corredor['id'] ?></td>
                            <td><?= $corredor['nombre'] ?></td>
                            <td><?= $corredor['apellidos'] ?></td>
                            <td><?= $corredor['ciudad']; ?></td>
                            <td><?= $corredor['email']; ?></td>
                            <td class="text-end"><?= $corredor['edad'] ?></td>
                            <td><?= $corredor['categoria'] ?></td>
                            <td><?= $corredor['club'] ?></td>
                            <td>
                                <!-- Acciones: Siempre vamos a enviar enlaces de tipo Get dinámico con el id del articulo con el que vamos a trabajar -->
                                <!-- Boton de borrar  -->
                                <a href="delete.php?id=<?= $corredor['id'] ?>" class= "btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('Confirmar eliminación de artículo')">
                                    <i class="bi bi-trash3"></i>
                                </a>
                                <!-- Botón de editar -->
                                <a href="edit.php?id=<?= $corredor['id'] ?>" class="btn btn-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <!-- Botón mostrar -->
                                <a href="show.php?id=<?= $corredor['id'] ?>" class="btn btn-info btn-sm" title="Mostrar">
                                <i class="bi bi-eye-fill"></i>
                                </a>  
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total corredores:<?= $corredores->num_rows ?></td>
                    </tr>
                </tfoot>
            </table>
        </main>

        <!-- Pie de página -->
        <?php require_once "partials/footer.partial.php"; ?>
    </div>

    <!-- JavaScript Bootstrap 5.3.8 -->
    <?php require_once "layouts/jsbootstrap.layout.php"; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once "layouts/head.layout.php"; ?>
    <title>Gestión de alumnos</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container mt-3">

        <!-- Cabecera del documento -->
        <?php require_once "partials/header.partial.php"; ?>

        <!-- Contenido principal -->
        <main>
            <h1>Proyecto 4.1 - CRUD Alumnos (CON ENCAPSULAMIENTO)</h1>

            <!--Barra de navegación -->
            <?php require_once "partials/menu.partial.php"; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-end">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Asignaturas</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cada iteración obtiene un objeto. $alumnos es un array de objetos ($alumno es un objeto en cada iteración) -->
                    <?php foreach ($alumnos as $alumno): ?>
                        <tr>
                            <td class="text-end"><?= $alumno->getId() ?></td>
                            <td><?= $alumno->getNombre() ?></td>
                            <td><?= $alumno->getApellidos() ?></td>
                            <td><?= $alumno->getEmail() ?></td>
                            <td><?= $alumno->getFechaNacimiento() ?></td>
                            <td><?= $cursos[$alumno->getCurso()]; ?></td>
                            <td><?= implode(', ', Class_tabla_alumnos::asignaturas_indices_a_nombres($alumno->getAsignaturas())) ?></td>
                            <td>
                                <!-- Acciones: Siempre vamos a enviar enlaces de tipo Get dinámico con el id del alumno con el que vamos a trabajar -->
                                <!-- Boton de borrar  -->
                                <a href="delete.php?id=<?= $alumno->getId() ?>" class= "btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('Confirmar baja de alumno')">
                                    <i class="bi bi-trash3"></i>
                                </a>
                                <!-- Botón de editar -->
                                <a href="edit.php?id=<?= $alumno->getId() ?>" class="btn btn-primary btn-sm" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <!-- Botón mostrar -->
                                <a href="show.php?id=<?= $alumno->getId() ?>" class="btn btn-info btn-sm" title="Mostrar">
                                <i class="bi bi-eye-fill"></i>
                                </a>  
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total alumnos:<?= count($alumnos) ?></td>
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
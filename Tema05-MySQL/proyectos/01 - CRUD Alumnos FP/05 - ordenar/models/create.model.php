<!-- Obtiene valores del formulario, crea un nuevo objeto con ellos y guardarlos en la base de datos mediante un insert -->
 <?php
    /*
        modelo: create.model.php 
        descripción: recupera los valores del formulario y los añade a la base de datos
    */
    
    // 1. Recogemos los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $nacionalidad = $_POST['nacionalidad'];
    $fecha_nac = $_POST['fecha_nac'];
    $curso = $_POST['curso_id'];

    // 2. Creo un objeto de la clase alumno a partir de los valores del formulario
    $nuevo_alumno = new Class_alumno(
        null, 
        $nombre, 
        $apellidos, 
        $email, 
        $telefono, 
        $nacionalidad, 
        $dni,
        $fecha_nac,
        $curso
    );

    // 3. Conectamos con la base de datos
    $tabla_alumnos = new Class_tabla_alumnos('localhost', 'root', '', 'fp');

    // 4. Ejecutamos nuestra función create() de la clase_tabla_alumnos
    $tabla_alumnos->create($nuevo_alumno);

    // 5. Volvemos a obtener la lista de alumnos y los cursos:
    $alumnos = $tabla_alumnos->get_alumnos();
    $cursos = $tabla_alumnos->get_cursos();


 ?>
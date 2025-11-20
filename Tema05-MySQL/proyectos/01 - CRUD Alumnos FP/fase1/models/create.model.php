<!-- Obtiene valores del formulario, crea un nuevo objeto con ellos y guardarlos en la base de datos mediante un insert -->
 <?php
    /*
        modelo: create.model.php 
        descripción: recupera los valores del formulario y los añade a la base de datos
    */
    
    // 1. Recogemos los datos del formulario
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['nombre'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $nacionalidad = $_POST['nacionalidad'];
    $fecha_nac = $_POST['fecha_nac'];
    $curso = $_POST['curso_id'];

 ?>
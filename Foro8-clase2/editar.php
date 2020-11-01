<?php 
    include './funciones.php';
    include './layout/header.php';

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    if (!$id) {
        die('No es valido');
    }

    $result = getAlumno($id);
    $alumno = $result->fetch_assoc();

    include './layout/formulario.php';
?>
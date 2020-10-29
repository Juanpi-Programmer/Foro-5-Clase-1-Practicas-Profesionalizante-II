<?php 

function getAlumnos(){
    include 'connect.php';
    try{
        return $conn->query("SELECT id, nombre, estado_id, fecha_actualizacion FROM usuario");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

//Obtiene un contacto y toma una id

function getAlumno($id){
    include 'connect.php';
    try{
        return $conn->query("SELECT id, nombre, estado_id, fecha_actualizacion FROM usuario WHERE id = $id");
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
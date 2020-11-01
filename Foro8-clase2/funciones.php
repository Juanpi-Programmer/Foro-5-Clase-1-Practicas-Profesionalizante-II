<?php 

function getAlumnos(){
    include 'connect.php';
    try{
        $sql = " SELECT usuario.*, estados.estado FROM usuario INNER JOIN estados on usuario.estado_id = estados.id ";
        return $conn->query($sql);
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}

//Obtiene un contacto y toma una id

function getAlumno($id){
    include 'connect.php';
    try{
        $sql = " SELECT usuario.*, estados.estado FROM usuario INNER JOIN estados on usuario.estado_id = estados.id WHERE usuario.id = $id ";
        return $conn->query($sql);
    }catch(Exception $e){
        echo "Error!!" . $e->getMessage() . "<br>";
        return false;
    }
}
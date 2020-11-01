<?php
    $idEliminar = filter_var($_GET['delete'], FILTER_VALIDATE_INT);

    if($idEliminar) {
        require_once('../connect.php');

        try{
            $stmt = $conn->prepare("DELETE FROM usuario WHERE id = ? ");
            $stmt->bind_param("i", $idEliminar);
            $stmt->execute();
            if($stmt->affected_rows == 1){
                $respuesta = array(
                    'respuesta' => 'Eliminado'
                );
            }
            $stmt->close();
            $conn->close();
        } catch (Exception $e){
            $respuesta = array(
                'error' => $e->getMessage()
            );
        }
        echo json_encode($respuesta);
    }

    if (isset($_POST['accion'])) {
       
        if($_POST['accion'] == 'crear ') {
            //creará un nuevo registro en la bd
        
            require_once('../connect.php');
            //VALIDAR LAS ENTRADAS
            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
            $estado = filter_var($_POST['estado'], FILTER_SANITIZE_STRING);

            try{
                $stmt = $conn->prepare("INSERT INTO usuario (nombre, estado_id) VALUES (?, ?)");
                $stmt->bind_param("ss", $nombre, $estado);
                $stmt->execute();

                if ($stmt->affected_rows == 1) {
                    $respuesta = array(
                        'respuesta' => 'correcto',
                        'datos' => array(
                            'nombre' => $nombre,
                            'estado_id' => $estado
                        )
                    );
                }
                $stmt->close();
                $conn->close();
            }catch(Exception $e){
                $respuesta = array(
                    'error' => $e
                );
               
            }
            echo json_encode($respuesta);
        }
        if ($_POST['accion'] == 'editar ') {
            echo 'editar';
            require_once('../connect.php');

            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
            $estado = filter_var($_POST['estado'], FILTER_SANITIZE_STRING);
            $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

            try{
                $stmt = $conn->prepare("UPDATE usuario SET nombre = ?, estado_id = ? WHERE id = ? ");
                $stmt->bind_param("ssi", $nombre, $estado, $id);
                $stmt->execute();

                if ($stmt->affected_rows == 1) {
                    $respuesta = array(
                        'respuesta' => 'correcto',
                        'datos' => array(
                            'nombre' => $nombre,
                            'estado_id' => $estado
                        )
                    );
                }
                $stmt->close();
                $conn->close();
            }catch(Exception $e){
                $respuesta = array(
                    'error' => $e
                );
            }
            echo json_encode($respuesta);
        }
    }
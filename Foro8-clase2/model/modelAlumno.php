<?php 
    echo json_encode($_POST);
    if (isset($_POST['nombre'])) {
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
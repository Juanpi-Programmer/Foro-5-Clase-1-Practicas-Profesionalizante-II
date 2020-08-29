<?php 
    $title = $_REQUEST['title'];
    $autor = $_REQUEST['autor'];
    $editorial = $_REQUEST['editorial'];
    $date = $_REQUEST['date'];
    $description = $_REQUEST['description'];

    include 'layout/header.php';
?> 
    <div class="container mt-5">
        <h1>Creado Exitosamente</h1>
        <div class="datos-form">
            <div class="section">
                <h5>Titulo: </h5>
                <p><?php echo $title?></p>
            </div>
            <div class="section">
                <h5>Autor: </h5>
                <p><?php echo $autor?></p>
            </div>
            <div class="section">
                <h5>Editorial: </h5>
                <p><?php echo $editorial?></p>
                
            </div>
            <div class="section">
                <h5>Date: </h5>
                <p><?php echo $date?></p>
               
            </div>
            <div class="section">
                <h5>Descripcion: </h5>
                <p><?php echo $description?></p>
            </div>
            
        </div>
    </div>
    

    
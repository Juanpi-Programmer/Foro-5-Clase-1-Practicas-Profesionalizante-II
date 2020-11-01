<?php 
    include './funciones.php';
    include './layout/header.php';
    include './layout/formulario.php';
?>
<div class="list">
    <h2 class="mb-5">Lista de Alumnos</h2>
    <div class="users">
        <?php $alumnos = getAlumnos();
            if ($alumnos) {
                foreach ($alumnos as $alumno) { ?>
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item flex-list">
                                <div class="nombre">
                                    <?php echo $alumno['nombre'] ?>
                                </div>
                               <div class="estado">
                                    <?php echo $alumno['estado'] ?>
                                </div>
                                <div class="action">
                                    <a class="action-edit" href="editar.php?id=<?php echo $alumno['id'] ?>">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                    <a class="action-edit" href="./model/modelAlumno.php?delete=<?php echo $alumno['id'] ?>">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
            <?php }
        } ?> 
    </div>
   
</div>
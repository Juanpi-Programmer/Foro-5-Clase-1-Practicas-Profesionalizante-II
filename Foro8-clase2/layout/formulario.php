<body>
    <div class="campos">
    <h2 class="mb-4">
        <?php if(isset($alumno['estado_id'])) echo ($alumno['estado_id']) ? 'Editar Alumno'  : 'Agregar Alumno';?>
    </h2>
        <form method="POST" action="./model/modelAlumno.php">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input 
                    type="text" 
                    class="form-control" 
                    name="nombre" 
                    aria-describedby="Nombre" 
                    value="<?php if(isset($alumno['nombre'])) echo ($alumno['nombre']) ? $alumno['nombre'] : ' ';?>"
                    required
                >
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control">
                    <option value="1" <?php if(isset($alumno['estado_id'])) echo ($alumno['estado_id'] == '1') ? 'selected' : ''; ?> >Potencial</option>
                    <option value="2" <?php if(isset($alumno['estado_id'])) echo ($alumno['estado_id'] == '2') ? 'selected' : ''; ?>>Nuevo</option>
                    <option value="3" <?php if(isset($alumno['estado_id'])) echo ($alumno['estado_id'] == '3') ? 'selected' : ''; ?> >Malo</option>
                    <option value="4" <?php if(isset($alumno['estado_id'])) echo ($alumno['estado_id'] == '4') ? 'selected' : ''; ?>>Exelente</option>
                </select>
            </div>
            <?php 
                $accion =  (isset($alumno['estado'])) ? 'editar' : 'crear';
            ?>

            <input type="hidden" name="accion" value="<?php echo $accion; ?> ">

            <?php if(isset($alumno['id'] )) :?>
                <input 
                    type="hidden" 
                    name="id" 
                    value="<?php echo $alumno['id'];?>"
                >
            <?php endif;?>
            <button type="submit" class="btn btn-danger mb-2 mt-4">Enviar</button>
        </form>
    </div>
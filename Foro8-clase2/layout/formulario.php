<body>
    <div class="campos">
    <h2 class="mb-4">Carga de Alumno</h2>
        <form method="POST" action="./model/modelAlumno.php">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="nombre" aria-describedby="Nombre" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <select name="estado" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger mb-2 mt-4">Enviar</button>
        </form>
    </div>
<?php include 'layout/header.php'; ?> 
<body>
    <div class="container">
        <h1 class="mt-4">Cargar Libro</h1>
        <form class="mt-4 formulario" method="POST" action="create.php">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Ingrese Titulo" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input name="autor" type="text" class="form-control" id="autor" placeholder="Ingrese Autor" required>
            </div>
            <div class="form-group">
                <label for="editorial">Editorial</label>
                <input name="editorial" type="text" class="form-control" id="editorial" placeholder="Ingrese Editorial" required>
            </div>
            <div class="form-group">
                <label for="date">Fecha</label>
                <input name="date" type="date" class="form-control" id="date" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción del contenido</label>
                <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-2 mt-4">Enviar</button>
        </form>
    </div>
</body>
</html>
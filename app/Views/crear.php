<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="p-5">
        <h1 class="fw-bold">Crear Nuevo Libro</h1>
        <form method="POST" action="<?php echo base_url() . '/crearLibro' ?>" class="px-5">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control border border-primary" id="titulo" name="titulo" required>
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control border border-primary" id="autor" name="autor" required>
            <label for="publicacion" class="form-label">Año publicación</label>
            <input type="text" class="form-control border border-primary" id="publicacion" name="publicacion" required>
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control border border-primary" id="genero" name="genero" required>
            <br>
            <a href="<?php echo base_url().'/'?>" class="btn btn-secondary mt-3 mr-5 col-2">Volver</a>
            <button type="submit" class="btn btn-primary mt-3 col-2">Crear</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
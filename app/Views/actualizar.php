<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="p-5">
        <h1 class="fw-bold">Editar: <?php echo $titulo?></h1>
        <form method="POST" action="<?php echo base_url() . '/actualizar' ?>" class="px-5">
            <input type="text" id="id_nombre" hidden="" name="id_nombre" value="<?php echo $id_nombre ?>">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control border border-primary" name="titulo" id="titulo" value="<?php echo $titulo ?>" required>
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control border border-primary" id="autor" name="autor" value="<?php echo $autor ?>" required>
            <label for="publicacion" class="form-label">Año publicación</label>
            <input type="text" class="form-control border border-primary" id="publicacion" name="publicacion" value="<?php echo $publicacion ?>" required>
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control border border-primary" id="genero" name="genero" value="<?php echo $genero ?>" required>
            <br>
            <a href="<?php echo base_url().'/'?>" class="btn btn-secondary mt-3 mr-3 col-2">Volver</a>
            <button type="submit" class="btn btn-primary mt-3 col-2">Editar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>libreria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="p-5">
        <h1 class="fw-bold">Inventario Libros</h1>
        <div>
            <a href="<?php echo base_url().'/crear'?>" class="btn btn-success m-3">Crear Libro</a>
        </div>
        <div>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Año publicación</th>
                        <th scope="col">Género</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($datos as $key): ?>
                        <tr>
                            <td><?php echo $key->titulo?></td>
                            <td><?php echo $key->autor?></td>
                            <td><?php echo $key->publicacion?></td>
                            <td><?php echo $key->genero?></td>
                            <td>
                                <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre?>" class="btn btn-warning">editar</a>
                            </td>
                            <td>
                            <a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger">eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      let mensaje = '<?php echo $mensaje ?>';

      if(mensaje == '1'){
        swal('Exito!','Agregado con exito!','success');
      } 
      else if(mensaje == '0'){
        swal('Error!','Fallo la inserción!','error');
      }
      else if(mensaje == '2'){
        swal('Exito!','Actualizado con exito!','success');
      }
      else if(mensaje == '3'){
        swal('Error!','Fallo al actualizar!','error');
      }
      else if(mensaje == '4'){
        swal('Exito!','Eliminado con exito!','success');
      }
      else if(mensaje == '5'){
        swal('Error!','Fallo al eliminar!','error');
      }
    </script>
</body>

</html>
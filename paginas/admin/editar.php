<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="empleados" value="<?php echo $row['cod_estudiante']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Dni" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="ocupacion" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                
                            <input type="submit" class="btn" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
<?php
include 'conexion.php';





session_start();
if (isset($_SESSION['id'])) {



        $fecha = $_POST['fecha_fundacion'];
        $empresa = $_POST['nombre_empresa'];
        $servicio = $_POST['servicio'];
        $instagram = $_POST['instagram'];
        $facebook = $_POST['facebook'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $sector = $_POST['sector'];

        $id_usuario = $_SESSION['id'];

        $insert1 = "INSERT INTO admin_datos(fecha_fundacion,nombre_empresa,servicio,instagram,facebook,direccion,telefono,sector)
                       VALUES('$fecha','$empresa','$servicio','$instagram','$facebook','$direccion','$telefono','$sector')";

        $result1 = mysqli_query($conexion, $insert1);

        if ($result1) {
            echo '
          <script>
               alert("usuario registrado exitosamente")
               window.location ="../paginas/formulario_user.php"
          </script>     
               ';
       } else {
            echo '
          <script>
               alert("error usuario no registrado")
               window.location ="../paginas/registrate.php"
          </script>     
               ';
       }

    } elseif (isset($_SESSION['id2'])) 

        $fecha_contrato = $_POST['fecha_contrato'];
        $ocupacion = $_POST['ocupacion'];
        $empresa_user = $_POST['empresa'];
        $telefono_user = $_POST['telefono'];
        $direccion_user = $_POST['direccion'];

        $insert2 = "INSERT INTO user_datos(fecha_contrato,ocupacion,empresa,telefono,direccion)
                        VALUES ('$fecha_contrato','$ocupacion','$empresa_user','$telefono_user','$direccion_user')";

        $result2 = mysqli_query($conexion, $insert2);

        if ($result2) {
            echo '
          <script>
               alert("usuario registrado exitosamente")
               window.location ="../paginas/formulario_user.php"
          </script>     
               ';
       } else {
            echo '
          <script>
               alert("error usuario no registrado")
               window.location ="../paginas/registrate.php"
          </script>     
               ';
       }


    








?>
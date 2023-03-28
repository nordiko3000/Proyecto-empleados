<?php
include ("conexion.php");
include("register.php");




session_start();

if(isset($_POST['admin'])) {

    $tabla = $_POST['empresa'];
    
    if($tabla == 'admin_datos') {

        $fecha = $_GET['fecha_fundacion'];
        $empresa = $_GET['nombre_empresa'];
        $servicio = $_GET['servicio'];
        $instagram = $_GET['instagram'];
        $facebook = $_GET['facebook'];
        $direccion = $_GET['direccion'];
        $telefono =$_GET['telefono'];
        $sector = $_GET['sector'];

        $fecha = date("Y-m-d");

        $insert = "INSERT INTO admin_datos(fecha_fundacion,nombre_empresa,servicio,instagram,facebook,direccion,telefono,sector)
                   VALUES('$fecha','$empresa','$servicio','$instagram','$facebook','$direccion','$telefono','$sector')";

        $query = mysqli_query($conexion, $insert);

        if ($query) {
            echo '
          <script>
               alert("usuario registrado exitosamente")
               window.location ="../paginas/admin/admin.php"
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

    } elseif($tabla == 'empleados') {

        $fecha_contrato = $_GET['fecha_contrato'];
        $ocupacion = $_GET['ocupacion'];
        $empresa_user = $_GET['empresa'];
        $telefono_user = $_GET['telefono'];
        $direccion_user = $_GET['direccion'];

        $fecha_contrato = date("Y-m-d");

        $query = "INSERT INTO user_datos(fecha_contrato,ocupacion,empresa,telefono,direccion)
                    VALUES ('$fecha_contrato','$ocupacion','$empresa_user','$telefono_user','$direccion_user')";
        

        $query = mysqli_query($conexion, $insert);

        if ($result) {
            echo '
          <script>
               alert("usuario registrado exitosamente")
               window.location = "../paginas/user/user.php"
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

    }

}


mysqli_close($conexion);






?>
<?php
include 'conexion.php';
include 'registrate.php';

date_default_timezone_set('America/Mexico_City');


//aqui hago unas variables que me dicen que valor de la tabla es para enviar los datos a su respectiva tabla

$SESSION = "SELECT * FROM empresa WHERE id =1";
$SESSION_EMPLEADOS = "SELECT * FROM empleados WHERE id=1";

session_start();

//aqui hago el if que me mandara los datos de la empresa en caso de entrar como administrador

if (isset($_SESSION)) {



        $fecha = $_POST['fecha_fundacion'];
        $empresa = $_POST['nombre_empresa'];
        $servicio = $_POST['servicio'];
        $instagram = $_POST['instagram'];
        $facebook = $_POST['facebook'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $sector = $_POST['sector'];

        $fecha = date("Y-m-d");

        

        $insert1 = "INSERT INTO admin_datos(fecha_fundacion,nombre_empresa,servicio,instagram,facebook,direccion,telefono,sector)
                       VALUES('$fecha','$empresa','$servicio','$instagram','$facebook','$direccion','$telefono','$sector')";

        $result1 = mysqli_query($conexion, $insert1);

        if ($result1) {
            echo '
          <script>
               alert("usuario registrado exitosamente")
               window.location ="../paginas/admin/inicio_admin.php"
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

//aqui hago un elseif porque como es variable se me hizo mas facil 

    } elseif (isset($SESSION_EMPLEADOS)) 

        $fecha_contrato = $_POST['fecha_contrato'];
        $ocupacion = $_POST['ocupacion'];
        $empresa_user = $_POST['empresa'];
        $telefono_user = $_POST['telefono'];
        $direccion_user = $_POST['direccion'];

        //aqui hago una variable para que me diga el formato de fecha 

        $fecha_contrato = date("Y-m-d");

        $insert2 = "INSERT INTO user_datos(fecha_contrato,ocupacion,empresa,telefono,direccion)
                        VALUES ('$fecha_contrato','$ocupacion','$empresa_user','$telefono_user','$direccion_user')";

        $result2 = mysqli_query($conexion, $insert2);

        if ($result2) {
            echo '
          <script>
               alert("usuario registrado exitosamente")
               window.location = "../paginas/user/inicio_user.php"
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
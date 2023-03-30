<?php

include('conexion.php');


$nombre = $_POST['nombre'];
$fecha_contrato = $_POST['fecha'];
$ocupacion = $_POST['ocupacion'];
$empresa_user = $_POST['empresa'];
$telefono_user = $_POST['telefono'];
$direccion_user = $_POST['direccion'];

$fecha_contrato = date("Y-m-d" );

$insert = "INSERT INTO cliente_datos(nombre,fecha,ocupacion,empresa,direccion,telefono)
            VALUES ('$nombre','$fecha_contrato','$ocupacion','$empresa_user','$direccion_user','$telefono_user')";



$query = mysqli_query($conexion, $insert);

if ($query) {
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
       window.location ="../paginas/user/formulario_user.php"
  </script>     
       ';
}



?>
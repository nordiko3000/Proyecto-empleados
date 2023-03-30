<?php



include("conexion.php");



$fecha = $_POST['fecha_fundacion'];
$empresa = $_POST['nombre_empresa'];
$servicio = $_POST['servicio'];
$facebook = $_POST['facebook'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$sector = $_POST['sector'];

$fecha = date("Y-m-d");

$insert = "INSERT INTO admin_datos(fecha_fundacion,nombre_empresa,servicio,facebook,direccion,telefono,sector)
                   VALUES('$fecha','$empresa','$servicio','$facebook','$direccion','$telefono','$sector')";

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








?>
<?php

//cariables de las tablas
$nombre = $_POST["nombre_completo"];
$correo = $_POST["correo"];
$nombre_usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$contrasena = hash('sha512', $contrasena);


$verificar_nombre = mysqli_query($conexion, "SELECT * FROM empresa WHERE nombre = '$nombre'");
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM empresa WHERE usuario = '$nombre_usuario'");
$verificar_correo = mysqli_query($conexion, "SELECT * FROM empresa WHERE correo= '$correo'");

$verificar_nombre2 = mysqli_query($conexion, "SELECT * FROM empleados WHERE nombre_completo = '$nombre'");
$verificar_usuario2 = mysqli_query($conexion, "SELECT * FROM empleados WHERE nombre_usuario = '$nombre_usuario'");
$verificar_correo2 = mysqli_query($conexion, "SELECT * FROM empleados WHERE correo = '$correo'");

if (
     (mysqli_num_rows($verificar_nombre) > 0 ||
          mysqli_num_rows($verificar_usuario) > 0 ||
          mysqli_num_rows($verificar_correo) > 0)
     || (mysqli_num_rows($verificar_nombre2) > 0 ||
          mysqli_num_rows($verificar_usuario2) > 0 ||
          mysqli_num_rows($verificar_correo2) > 0)
) {

     echo '
          <script>
          alert ("nombre, correo o usuario ya agregado xd");
          window.location="../paginas/login.php"
          </script>
                   ';

}

if (isset($_POST['admin'])) {

     include 'conexion.php';

     $query = "INSERT INTO empresa(nombre_empresa,usuario,correo,contrasena) 
     VALUES('$nombre','$nombre_usuario','$correo','$contrasena')";

     $ejecutar = mysqli_query($conexion, $query);

     if ($ejecutar) {
          echo '
   <script>
        alert("usuario registrado exitosamente")
        window.location ="../paginas/formulario_admin.php"
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




} else {

     include 'conexion.php';

     $query = "INSERT INTO empleados(nombre_completo,nombre_usuario,correo,contrasena)
     VALUES('$nombre','$nombre_usuario','$correo','$contrasena')";

     $ejecutar = mysqli_query($conexion, $query);

     if ($ejecutar) {
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



}







mysqli_close($conexion);


?>
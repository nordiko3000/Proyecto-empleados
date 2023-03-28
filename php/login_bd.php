<?php
include("conexion.php");

session_start();

if (isset($_POST["admin1"])) {

    $User = $_POST["usuario"];
    $Password = $_POST["contrasena"];

    

    $validar_login = mysqli_query($conexion, "SELECT * FROM empresa WHERE usuario  = '$User'
    and contrasena = '$Password' ");

    if (mysqli_num_rows($validar_login) > 0) {
        header("location: ../paginas/admin/admin.php");
    } else {
        echo '
    <script>
           alert("usuario o contraseña incorrecta intentelo de nuevo");
           window.location = "../paginas/admin.php";
</script>
    ';
    }





} else {

    $User2 = $_POST["usuario"];
    $Password2 = $_POST["contrasena"];

    $validar_login = mysqli_query($conexion, "SELECT * FROM empleados WHERE nombre_usuario = '$User2'
    and contrasena = '$Password2' ");

    if (mysqli_num_rows($validar_login) > 0) {
        echo '
    <script>
           alert("usuario o contraseña incorrecta intentelo de nuevo");
           window.location = "../paginas/user.php";
</script>
    ';
    } else {
        echo '
    <script>
           alert("usuario o contraseña incorrecta intentelo de nuevo");
           window.location = "../paginas/usuario.php";
</script>
    ';
    }

}








?>
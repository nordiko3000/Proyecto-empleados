<?php
include("conexion.php");
session_start();

if (!$conexion) {
    echo '
    <script>
      alert("Error de conexión a la base de datos");
      window.location = "../paginas/login.php";
    </script>
    ';
    exit(); // salir del script
}

if (isset($_POST["admin"])) {
    $usuario = $_POST["usuario_login"];
    $contrasena = $_POST["contrasena_login"];

    echo$validar_login = mysqli_query($conexion, "SELECT * FROM administrador WHERE usuario = '$usuario' and contrasena = '$contrasena'");
    if (mysqli_num_rows($validar_login) > 0) {
        header("Location: ../paginas/admin/admin.php");
        exit();
    } else {
        echo '
        <script>
             alert("Error contraseña o usuario incorrecto");
             window.location= "../paginas/login.php";
        </script>
        ';
    }
} else {
    $usuario_login = $_POST["usuario_login"];
    $contrasena_login = $_POST["contrasena_login"];

    $validar_login_empleados = mysqli_query($conexion, "SELECT * FROM cliente WHERE usuario = '$usuario_login' and contrasena = '$contrasena_login'");

    if (mysqli_num_rows($validar_login_empleados) > 0) {
        echo '
        <script>
               alert("Bienvenido");
               window.location = "../paginas/user/user.php";
        </script>
        ';
    } else {
        echo '
        <script>
               alert("Error usuario o contraseña incorrecto");
               window.location = "../paginas/login.php";
        </script>
        ';
    }
}
?>

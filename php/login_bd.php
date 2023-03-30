<?

require("conexion.php");
session_start();
if ($conexion) {

    echo '
    <script>
      alert("sifunciona wey xd");
    </script>
    ';
    # code...
}else{
    echo '
    <script>
      alert("no funciona wey :c");
    </script>
    ';

}


if (isset($_POST["admin"])) {

    $usuario = $_POST["usuario_login"];
    $contrasena = $_POST["contrasena_login"];



    $validar_login = mysqli_query($conexion, "SELECT * FROM empresa WHERE usuario = '$usuario' and contrasena = '$contrasena' ");

    if (mysqli_num_rows($validar_login) > 0) {

        echo '
        <script>
               alert("bienvenido");
               window.location="../paginas/admin/admin.php";
        </script>
        
        ';
        # code...
    } else {
        echo '
        <script>
             alert("Error contraseña o usuario incorrecto");
             window.location= "../paginas/login.php";
        </script>
        ';
    }

    # 
} else {

    $usuario_em = $_POST["usuario_login"];
    $contrasena_em = $_POST["contrasena_login"];

    $validar_login_empleados = mysqli_query($conexion, "SELECT * FROM empleados WHERE nombre_usuario = '$usuario_em' and contrasena = '$contrasena_em'");

    if (mysqli_num_rows($validar_login_empleados) > 0) {
        echo '
        <script>
               alert("bienvenido");
               windoe.location ="../paginas/user/user.php";
        </script>
        ';
    } else {
        echo '
        <script>
               alert("Error usuario o contraseña incorecto");
               window.location = "../paginas/login.php";
        </script>
        ';
    }





}



?>
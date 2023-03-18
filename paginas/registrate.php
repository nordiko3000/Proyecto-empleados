<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/formularios.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <form  id="contactform" method="POST" action="../php/register.php">





        <input type="text" required placeholder="Nombre de empresa o empleado" name="nombre_completo">

        <input type="text" id="text" required placeholder="nombre de usuario" name="usuario">


        <input type="email" placeholder="correo" required name="correo">

        <input type="password" name="contrasena" required placeholder="contrasena">
        <div class="check">
            <label>Registrarse como administrador</label>
            <input type="checkbox" name="admin" value="1">

        </div>







        <button type="submit" id="btn">Enviar</button>
    </form>
</body>
<script src="../JS/register.js"></script>

</html>
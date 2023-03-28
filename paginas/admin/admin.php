<?php
session_start();


include("../../php/conexion.php");



$sql = "SELECT * FROM user_datos";

$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);






if (isset($_SESSION['usuario'])) {

  echo '
     <script>
             alert("Por favor inicia sesion");
     <script>
';

  header("location: ../index.php");

  session_destroy();

  die();
}




?>




<!DOCTYPE html>
<html lang="en">




</nav>

<body>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/user-empleado.css">
    <script src="https://kit.fontawesome.com/bbd4ac78c5.js" crossorigin="anonymous"></script>
    <script src="../../JS/user.js"></script>
  </head>

  <body id="body">

    <header>
      <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
      </div>
    </header>

    <div class="menu__side" id="menu_side">

      <div class="name__page">
        <img src="../imagenes/fabrilink.png" class=""></i>
        <h4>FabriLink</h4>
      </div>

      <div class="options__menu">

        <a href="#" class="selected">
          <div class="option">
            <i class="fas fa-home" title="Inicio"></i>
            <h4>Inicio</h4>
          </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="fa-sharp fa-solid fa-file" title="datos"></i></i>
            <h4>Datos</h4>
          </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="fa-sharp fa-solid fa-hand-holding-dollar" title="Pagos"></i>
            <h4>Pagos</h4>
          </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="fa-sharp fa-solid fa-calendar-days" title="Fechas"></i>
            <h4>Fechas</h4>
          </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="fa-sharp fa-solid fa-bell" title="Notificaciones"></i>
            <h4>Notificaciones</h4>
          </div>
        </a>

        <a href="#">
          <div class="option">
            <i class="fa-sharp fa-solid fa-gear" title="opciones"> </i>
            <h4>Configuracion</h4>
          </div>
        </a>

      </div>

    </div>






    </div>
    </div>

    <div class="user-profile">
      <div class="background-image"></div>
      <div class="user-info">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar">
        <h1>Nombre del Usuario</h1>
        <p>@nombre_de_usuario</p>
      </div>
    </div>


    <table class="table">
      <thead class="table-date">
        <tr>
          <th>Nombre completo</th>
          <th>Empresa</th>
          <th>Ocupacion</th>
          <th>Fecha de contratacion</th>
          <th>Pagos</th>
          <th>Comentarios</th>



        </tr>


      </thead>
      <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {
          ?>
          <tr>
            <th>
              <?php echo $row['nombre_completo'] ?>
            </th>
            <th>
              <?php echo $row['empresa'] ?>
            </th>
            <th>
              <?php echo $row['ocupacion'] ?>
            </th>
            <th>
              <?php echo $row['fecha_contrato'] ?>
            </th>
            <th>
              <?php echo $row['pagos'] ?>
            </th>
            <th>
              <?php echo $row['comentarios'] ?>
            </th>
            <th><a href="actualizar.php?id=<?php echo $row['nombre_completo'] ?>" class="btn btn-info">Editar</a></th>
            <th><a href="delete.php?id=<?php echo $row['nombre_completo'] ?>" class="btn btn-danger">Eliminar</a></th>
            
          </tr>
        <?php
        }
        ?>
      </tbody>



    </table>

  </body>

  <footer></footer>

</html>
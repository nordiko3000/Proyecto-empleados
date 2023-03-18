<?php


$conexion = mysqli_connect("localhost","root","","pagina-empleados-bd");

if ($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'error de conexion';
}




?>
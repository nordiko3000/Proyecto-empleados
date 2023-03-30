<?php


$conexion = mysqli_connect("localhost","root","","proyecto");

if ($conexion){
    echo 'conectado exitosamente';
}else{
    echo 'error de conexion';
}




?>
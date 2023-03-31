<?php

// Incluir archivo de conexión a la base de datos
include("../../php/conexion.php");

// Verificar que el formulario ha sido enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario
  $salario_semanal = $_POST["salario_semanal"];
  $salario_anual = $_POST["salario_anual"];

  // Insertar los valores en la tabla "salarios"
  $sql = "INSERT INTO salarios (salario_semanal, salario_anual) VALUES (:salario_semanal, :salario_anual)";
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(':salario_semanal', $salario_semanal);
  $stmt->bindParam(':salario_anual', $salario_anual);
  $resultado = $stmt->execute();

  // Verificar si la inserción se realizó con éxito
  if ($resultado) {
    echo "Los datos han sido insertados correctamente.";
  } else {
    echo "Ha ocurrido un error al insertar los datos.";
  }
} else {
  $id = $_GET['id']; // Recupera el valor del parámetro id enviado por la solicitud AJAX
  $stmt = $dbh->prepare("SELECT dato FROM tabla WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
  echo json_encode($resultado); // Devuelve el resultado como JSON
}

?>

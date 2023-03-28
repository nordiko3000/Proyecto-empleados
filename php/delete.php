


<?

include("conexion.php");



$admin =$_GET['id'];

$sql="DELETE FROM empleados  WHERE ='$admin'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: ../admin/admin.php");
    }
    



?>
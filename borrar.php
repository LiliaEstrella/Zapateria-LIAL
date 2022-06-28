<?php 

include("bd.php");
$id=$_GET['id'];
echo $id;
$respuesta=mysqli_query($conexion,"delete from calzado where(modelo='$id')");


if($respuesta){
    header("location:prodPorVender.php");
}
?>
<?php 

include("bd.php");

if(!empty($_POST["nombreU"])&&!empty($_POST["precioU"])&&!empty($_POST["claveU"])){
   
$consul=mysqli_query($conexion,"update calzado set nombre = '$nombre',precio='$precio' where(modelo='$clave')");

if($consul){
    header("location:prodPorVender.php");
}}else{
    echo "<p>llena los campos de clave, nombre y precio</p>";
}
?>
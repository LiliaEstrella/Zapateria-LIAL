<?php 
include("bd.php");
    //VALIDACIONES PARA LA CLAVE, NOMBRE Y PRECIO.

if(preg_match("/^[0-9]+$/",$_POST["clave"])&&is_numeric($_POST["clave"]))
{
$clave=$_POST["clave"];}

if(is_string($_POST["nombre"]))
    {$nombre=$_POST["nombre"];}

    if(preg_match("/^[0-9]+$/",$_POST["precio"])&&is_numeric($_POST["precio"]))
{$precio=$_POST["precio"];}


if(!empty($clave)&&!empty($nombre)&&!empty($precio)){

    $consulta=mysqli_query($conexion,"insert into calzado(modelo,nombre,precio) values ('$clave','$nombre','$precio')");
    if( $consulta){
        header("location:prodPorVender.php");
    }
}else{
    echo "Regresa y rellena todos los campos correctamente, por favor  :)";
}
?>
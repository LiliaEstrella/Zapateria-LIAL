<?php 
include("bd.php");
    $mensaje= "";
    //VALIDACIONES PARA LA EDAD NOMBRE E EMAIL.
if(preg_match("/^[0-9]+$/",$_POST["edad"])){
    $edad=$_POST["edad"];}
if(preg_match("/^([A-Za-zÑñ]+[áéíóú]?[A-Za-z]*){3,18}\s+([A-Za-zÑñ]+[áéíóú]?[A-Za-z]*){3,36}$/iu",$_POST["nombre"]))
    {$nombre=$_POST["nombre"];}

 

if(preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/",$_POST["email"])){
    $email=$_POST["email"];

}
    $descripcion=$_POST["descripcion"];

    $fecha=$_POST["fecha"];







if(!empty($nombre)||!empty($email)||!empty($edad)||!empty($descripcion))
{
    
$consul=mysqli_query($conexion,"insert into cotizacion (nombreCompleto,edad,correo,fecha,descripcion) values('$nombre','$edad','$email','$fecha','$descripcion')");

if($consul){
    header("location:cotizacion.php");
}}else{
     echo "Regresa e ingresa nombre, un correo electrónico y tu edad correctos, por favor :)";
}

echo $mensaje;
?>
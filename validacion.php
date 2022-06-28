<?php
include('bd.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","lial");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:consSolCotizacion.php");

}else{
    ?>

    <?php
              include("usuarios.html");

  ?>
<?php
echo "<p>Usuario o contraseña incorrectos</p>";
 ?>
  <?php
  
}
mysqli_free_result($resultado);
mysqli_close($conexion);
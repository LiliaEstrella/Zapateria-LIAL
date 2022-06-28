<?php 
include("bd.php");

$resultado=mysqli_query($conexion,"select * from cotizacion");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="/imagenes/kit.jpg">
    <title>Solicitudes de cotización</title>
</head>
<body>
    <nav class="navegador"> <ul class="listaNav"> 

        <li><a href="/prodPorVender.php">Productos por vender</a></li>
        <li><a href="index.html"> Cerrar sesión </a></li>
    </ul></nav>
    <img class="logo" src="/imagenes/kit.jpg" alt="">

     <h2>Consultar cotizaciones</h2>
     <table class="productos">
         <tr class="campos">
             <th>Nombre completo</th>
             <th>Edad</th>
             <th>Correo</th>
             <th> Fecha de solicitud</th>
             <th> Descripción de la solicitud</th>
         </tr>

         <?php   foreach($resultado as $fila)  {       ?>
    <tr class="registros">
        <td><?php echo $fila["nombreCompleto"]?></td>
        <td><?php echo $fila["edad"]?></td>
        <td><?php echo $fila["correo"]?></td>
        <td><?php echo $fila["fecha"]?></td>
        <td><?php echo $fila["descripcion"]?></td>


    </tr>
    
    <?php  }  
    
    ?>
        

         <tr class="registros">
             <td>Berenice Gonzalez</td>
             <td>20</td>
             <td>Bere@gmail.com</td>
             <td>08/01/2022</td>
             <td>Un par de tennis imagination del número 4 y 2 en patines del número 3</td>
         </tr>
         <tr class="registros">
            <td>Porky Soin</td>
            <td>25</td>

            <td>Porky@gmail.com</td>
            <td>08/03/2022</td>
            <td>Un par de tennis Blanco y azul del número 4 y 2 en patines del número 3</td>
        </tr>
       </table> 

       <footer>
        Creado por Lilia Hurtado Ricardo. PW1. MAYO 2022.
         
      </footer>
</body>
</html>
<?php 
include("bd.php");

$resultado=mysqli_query($conexion,"select * from calzado");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/imagenes/kit.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Productos por vender</title>
</head>
<body>
    <nav class="navegador"> <ul class="listaNav"> 

        <li><a href="consSolCotizacion.php"> Consultar solicitudes</a></li>
        <li><a href="index.html"> Cerrar sesión </a></li>
    </ul></nav>
    <img class="logo" src="/imagenes/kit.jpg" alt="">
    <h2>Productos a vender</h2>
    <form id="productos"  action="agregar.php"method="post">

    <input required name="clave"class="consulta" type="text" placeholder="Ingresa la clave ">
    <input required name="nombre"class="consulta"type="text" placeholder="Ingresa el nombre ">
    <input required name="precio"class="consulta" type="text" placeholder="Ingresa el precio ">
    <button class="agregar">Agregar producto</button>
</form>
 <table class="productos">
    <tr class="campos">
        <th>Clave del producto</th>
        <th>Nombre del producto</th>
        <th>Precio</th>
        <th class="actualizar">
            
            
        </th>

    </tr>
    <?php   foreach($resultado as $fila)  {       ?>
    <tr class="registros">
        <td><?php echo $fila["modelo"]?></td>
        <td><?php echo $fila["nombre"]?></td>
        <td><?php echo $fila["precio"]?></td>
        <td><a href="leer.php?id=<?php echo $fila['modelo'];?>">Ver</a></td>
        <td><a href="borrar.php?id=<?php echo $fila['modelo'];?>">Borrar</a></td>
    </tr>
    
    <?php  }  
    
    ?>
   
    <tr class="registros">
        <td>002</td>
        <td>Blanco y negro</td>
        <td>350.01</td>
    </tr>
    <tr class="registros">
        <td>003</td>
        <td>Blanco y azul</td>
        <td>306.01</td>
    </tr>
    <tr class="registros">
        <td>004</td>
        <td>Colores</td>
        <td>360.01</td>
    </tr>
    <tr class="registros">
        <td>005</td>
        <td>En patines</td>
        <td>400.01</td>
    </tr>
   
  </table> 
  <form action="actualizar.php" method="POST">
      <br>
  <p>Para editar algún registro ingresa los siguientes datos:</p>
    <input required name="claveU"class="consulta" type="text" placeholder="Ingresa la clave ">
    <input required name="nombreU"class="consulta"type="text" placeholder="Nuevo nombre ">
    <input required name="precioU"class="consulta" type="text" placeholder="Nuevo precio ">
    <br>
    <input id="actualizar" type="submit" value="Editar registro">
    <br> 
    </form>
    <footer>
    Creado por Lilia Hurtado Ricardo. PW1. MAYO 2022.
     
  </footer>

</body>
</html>
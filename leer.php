<?php 
include("bd.php");
$id=$_GET['id'];

$resultado=mysqli_query($conexion,"select * from calzado where(modelo='$id')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="icon" href="/imagenes/kit.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

</head>
<body>
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
    </tr>
    
    <?php  }  
    
    ?> 

</table> 




</body>
</html>



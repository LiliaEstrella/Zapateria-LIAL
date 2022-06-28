<?php $conexion=mysqli_connect("localhost","root","","lial");

if(isset($conexion)){
    echo "Nos hemos conectado";
}else{
    echo "Ha fallado la conexión";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="/imagenes/kit.jpg">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Inconsolata&family=Indie+Flower&family=Macondo&family=Redressed&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navegador"> <ul class="listaNav"> 
        <li><a href="index.html">Negocio</a></li>
        <li><a href="catalogo.html"> Catálogo de productos</a></li>
        <li><a href="cotizacion.html"> Solicitud de cotización</a></li>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="usuarios.html"> Acceso a usuarios</a></li>
    </ul></nav>
    <img class="logo" src="/imagenes/kit.jpg" alt="">
    <h2>Solicita tu cotización será un gusto atenderte</h2>
    <p>Ingresa los siguientes datos para que podamos enviarte tu cotización</p>

    <form id="solCot" action="solCot.php" method="POST">
   <input id="fecha" name="fecha" readonly>
        <label >Ingresa tu nombre completo</label>
        <input required name="nombre" id="nombre" type="text">

        <label >Ingresa tu edad</label>
        <input required type="number" id="tentacles" name="edad"
       min="18" max="100" width="600px" required>

        <label >Ingresa tu e-mail</label>
        <input required name="email" type="email" id="email"  size="30" required pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$">
        <label >Ingresa los productos que te interesan</label>
        <textarea name="descripcion" name="textarea" id="" cols="20" rows="10" required></textarea>
        <button class="btn">Cancelar</button>
        <button class="btn">Enviar</button>

    </form>
    <script src="app.js"></script>
</body>
<footer>
    Creado por Lilia Hurtado Ricardo. PW1. MAYO 2022. 
 </footer>
</html>
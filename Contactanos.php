<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Muebles P&C</title>
</head>
<body id="formulario" style="background-image: url('assets/images/contactos.jpg')">
    <div id="header">
        <div>
            <a id="NombreLink" href="index.html"><h1 id="Nombre">Muebles C&P</h1></a>
        </div>
        <div>
            <a class="contacto" href="index.html">INICIO</a>
            <a class="contacto" href="nosotros.html">NOSOTROS</a>
            <a class="contacto" href="galeria.html">GALERIA</a>
            <a class="contacto" href="contactanos.php">CONTACTOS</a>
        </div>
    </div>

    
    <div class="main">
        <div>
            <form action="insertar.php" method="POST" name="formulario" class="Form">
    
                <div class="formulario">
                    <label for="nombre">Nombre</label><br>
                    <input name="nombre" class="input" id="nombre" type="text" placeholder="Nombre"><br>
                </div>
    
                <div class="formulario">
                    <label for="apellidos">Apellidos</label><br>
                    <input name="apellidos" class="input" id="apellidos" type="text" placeholder="Apellidos"><br>
                </div>
    
                <div class="formulario">
                    <label for="contacto">Número de teléfono.</label><br>
                    <input name="contacto" class="input" id="contacto" type="number" placeholder="Número de teléfono"><br>
                </div>    
    
                <div class="formulario">
                    <label for="correo">Correo</label><br>
                    <input name="correo" class="input" id="correo" type="email" placeholder="Correo electrónico"><br>
                </div>    
    
                <div class="formulario">
                    <label for="mensaje">Dejanos tu mensaje</label><br>
                    <input name="mensaje" class="input" id="mensaje" type="text" placeholder="Comentarios"><br>
                </div>    
    
                <div class="formulario center">
                    <input id="boton" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>


</body>
</html>
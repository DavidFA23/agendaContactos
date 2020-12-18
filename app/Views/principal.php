<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contactos</title>
    <link rel="stylesheet" href="public\css\estiloPrincipal.css">
</head>
<body>
    <h1>¡Bienvenido!</h1>

    <form action="<?php echo base_url('/contactos') ?>" method="POST" class="form-registro">
        <h2 class="form_titulo">Agenda de contactos</h2>
        <div class="contenedor-inputs">
            <div class="avatar" >
                <img src="public\img\lebronjames.jpg" alt="" class="imgRedonda" >
            </div>
            
            <input type="text" name="nombre" placeholder="David" class="input-48" required disabled>
            <input type="text" name="apellidos" placeholder="Fuentes" class="input-48" required disabled> 
            <!--
            <input type="email" name="correo" placeholder="@tucorreo" class="input-100" required>
            <input type="text" name="usuario" placeholder="Usuario" class="input-48" required>
            <input type="password" name="clave" placeholder="Contraseña" class="input-48" required>
            <input type="text" name="telefono" placeholder="Telefono" class="input-100" required>
            -->
            <input type="submit" value="Entrar" class="btn-enviar" required>
            <p class="form_link">Siguenos en<a href="https://www.facebook.com/profile.php?id=100011096070086">Facebook</a></p>
            
        </div>
    </form>
</body>
</html>
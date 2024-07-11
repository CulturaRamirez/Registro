<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <center>
        <div class="logis">
    <form id="registro" name="registro" method="POST" action="logi.php" autocomplete="on" class="fom">
        <div class="form-group">
            <label for="Usuari">Ingles tu Usuario</label> 
            <input type="text" class="form-control" id="Usuari" name="Usuari" placeholder="Introduce tu Usuario" autofocus required>
        </div>
        <div class="form-group">
            <label for="paswword">Ingles tu contraseña</label>
            <input type="password" class="form-control" id="paswword" name="passwword" placeholder="Introduce tu contraseña" autofocus required>
        </div>
            <br><input type="submit" value="Logi" name="btm">
        
        </form>
    </div>
    <?php

    ?>
    </center>
</body>
</html>
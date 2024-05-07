<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/styleRegistro.css">
</head>
<body>

<div class="container">
    <h2>Registro</h2>
    <form action="../controller/UsuarioController.php" method="post">

        <input type="hidden" name="action" value="registrar">
        
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="password">Confirmar contraseña:</label>
        <input type="password" id="confpassword"  name="confpassword" required >

        <label for="carnet">Número de Carnet:</label>
        <input type="number" id="carnet" name="carnet" required>

        <input type="submit" value="Registrarse">
    </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre: " value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" id="nombre">

            <input type="text" class="form-control" name="correo" placeholder="Correo: " value="<?php if(!$enviado && isset($correo)) echo $correo ?>" id="correo">

            <textarea placeholder="Mensaje:" name="mensaje" class="form-control" id="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if (!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" value="Enviar correo" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
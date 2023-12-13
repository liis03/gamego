<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/styleLogin.css" />
    <title>Login</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="<?= site_url('registrar'); ?>" method="post">
                <h1>Crear una cuenta</h1>
                <input type="text" name="nombre" placeholder="Nombre" pattern="[A-Za-z]{4,16}">
                <input type="text" name="apellido" placeholder="Apellido" pattern="[A-Za-z]{4,16}">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <input type="submit" name="registro">
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="<?= site_url('login'); ?>" method="post">
                <h1>Iniciar sesión</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="contrasena" placeholder="Contraseña">
                <a href="#">¿Olvidar su contrasena?</a>
                <input type="submit" name="login">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido de nuevo</h1>
                    <p>Introduce tus datos personales para acceder</p>
                    <button class="hidden" id="login">Iniciar sesión</button>

                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Nuevo</h1>
                    <p>Registrate con tus datos personales</p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url(); ?>/public/js/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/estilosRegistro.js"></script>
</body>

                    
</html>
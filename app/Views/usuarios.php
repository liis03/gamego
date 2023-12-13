<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabla de usuarios</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id_usuario</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>email</th>
            <th>rol</th>
        </tr>
        <?php foreach ($datos as $usuario) :?>
        <tr>
            <td><?= $usuario->id_usuario?></td>
            <td><?= $usuario->nombre?></td>
            <td><?= $usuario->apellido?></td>
            <td><?= $usuario->email?></td>
            <td><?= $usuario->rol?></td>
        </tr>

        <?php endforeach; ?>
    </table>

</body>

</html>
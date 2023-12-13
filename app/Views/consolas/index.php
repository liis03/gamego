<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/bootstrap/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <title>Consolas</title>
</head>

<body>
    <!-- Header -->
    <?= $this->include('header') ?>

    <?php if (empty($videojuegos)) : ?>
        <p>No hay videojuegos disponibles</p>
    <?php else : ?>
        <!--Cards shopping-->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($videojuegos as $juego) : ?>
                <div class="col">
                    <div class="card">
                        <img src="<?= base_url('public/img/' . 'videojuego_' . $juego['id_videojuego'] . '.jpg'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titulo: <?= $juego['titulo']; ?></h5>
                            <p class="card-text">Descripcion: <?= $juego['descripcion']; ?></p>
                            <p class="card-text">Precio: <?= $juego['precio']; ?> </p>
                            <a href="<?= base_url('/cesta'); ?>" class="btn btn-success">Comprar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <!--Fin cards shopping-->

    <script src="<?php echo base_url('public/js/jquery-3.7.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap/bootstrap.min.js'); ?>"></script>
    <!-- Footer -->
    <?= $this->include('footer') ?>
</body>

</html>
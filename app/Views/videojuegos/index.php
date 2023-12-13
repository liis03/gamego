    <!-- Header -->
    <?= $this->include('templates/header') ?>
<body>

<?=$this->include('templates/menu')?> 
    <?php if (empty($videojuegos)) : ?>
        <p>No hay videojuegos disponibles</p>
    <?php else : ?>
        <!--Cards shopping-->
        <div class="container my-4">
            <div class="alert alert-success">
                Pantalla de mensaje..
                <a href="#" class="badge badge-success">Ver carrito</a>
            </div>
            
            <div class="row">
                <?php foreach ($videojuegos as $juego) : ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <img src="<?= base_url('public/img/' . 'videojuego_' . $juego['id_videojuego'] . '.jpg'); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Titulo: <?= $juego['nombre']; ?></h5>
                                <p class="card-text">Descripcion: <?= $juego['descripcion']; ?></p>
                                <p class="card-text">Precio: <?= $juego['precio']; ?> </p>
                                <!-- Formulario de compra -->
                                <form id="formu" action=<?= site_url('/agregar-al-carrito'); ?> method="POST">
                                    <input type="hidden" name="tipo_producto" value="videojuego">
                                    <button type="submit" class="btn btn-primary" name="agregar" value="agregar">Agregar al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        </div>
        <!--Fin cards shopping-->

        <script src="<?php echo base_url('public/js/jquery-3.7.1.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap/bootstrap.min.js'); ?>"></script>
        <!-- Footer -->
        <?= $this->include('templates/footer') ?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
   <?=$this->include('templates/header');?>
    <title><?=$titulo?></title>
</head>

<body>
   <?=$this->include('templates/menuAdmin');?>
   <!-- seccion de contenido dinámico -->
    <?=$this->renderSection("contenido");?>
        <!--Carrusel-->
        <!-- <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src
                     base_url('public/img/carrusel1.jpg');?>
                    " class="d-block mx-auto w-100 h-100" alt="slide1">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src=" base_url('public/img/juego2.jpg');?>" class="d-block mx-auto w-100 h-100" alt="slide2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src=" base_url('public/img/juego3.jpg');?>" class="d-block mx-auto w-100 h-100" alt="slide3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

     Fin carrusel -->
    <!--Cards shopping-->
    <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="base_url('public/img/juego1.jpg');?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Descripcion sacada de bcadd</p>
                    <a href=" base_url('/admin/agregar_usuario'); ?>" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
    </div> --> 
    <!--Fin cards shopping-->
    <script src="<?php echo base_url('public/js/jquery-3.7.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap/bootstrap.min.js'); ?>"></script>
    <!-- footer -->
    <?=$this->include('templates/footer');?>
    <!-- seccion de codigo js -->
    <?=$this->renderSection("scripts");?>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/bootstrap/bootstrap.min.css" />
    <title>Home Administrador</title>
</head>

<body>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="homepage.php">
                    <img src="./assets/img/logo.png" alt="site icon">
                </a>
                <div class="order-lg-2 nav-btns">
                    <button type="button" class="btn position-relative">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">0</span>
                    </button>
                    <button type="button" class="btn position-relative">
                        <i class="fa fa-user"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                    </button>
                </div>
                <form method="post">
                    <button id="logoutButton" name="exit"><a href="<?= site_url('logout');?>">Cerrar sesión</a></button>
                </form>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="#header">Videojuegos</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="#collection">Consolas</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="#special">Accesorios</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="#blogs">Digital</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Fin nav-->
        <!--Carrusel-->
        <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="./assets/img/slide2.jpg" class="d-block w-100" alt="slide2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./assets/img/slide2.jpg" class="d-block w-100" alt="slide2">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./assets/img/slide2.jpg" class="d-block w-100" alt="slide2">
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
    </header>
    <main>
    <!--Fin carrusel-->
    <!--Cards shopping-->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="./assets/img/juego1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Descripcion sacada de bcadd</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./assets/img/juego1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Descripcion sacada de bcadd</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./assets/img/juego1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Descripcion sacada de bcadd</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="./assets/img/juego1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titulo</h5>
                    <p class="card-text">Descripcion sacada de bcadd</p>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!--Fin cards shopping-->
    <script src="<?php echo base_url(); ?>/public/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/js/bootstrap/bootstrap.min.js"></script>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Síguenos en nuestras redes sociales:</span>
            </div>
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <!-- Right -->
        </section>


        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Game Go!
                        </h6>
                        <p>
                            Descripcion de la empresa
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Productos
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Videojuegos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Consolas</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Accesorios</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Digital</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                    <!-- <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pedidos</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Soporte</a>
                        </p>
                    </div> -->
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                        <p><i class="fas fa-home me-3"></i> Ubicacion</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            game_go@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +34 000 000 000</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Game Go!</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>
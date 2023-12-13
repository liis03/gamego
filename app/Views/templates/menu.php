
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="<?= site_url('inicio'); ?>">
                    <img src="<?= base_url('public/img/logo.png'); ?>" alt="site icon" class="img-fluid h-50 w-50">
                </a>
                <form method="post">
                    <button id="logoutButton" name="exit"><a href="<?= site_url('/logout'); ?>">Cerrar sesión</a></button>
                </form>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-lg-1" id="navMenu">
                    <ul class="navbar-nav mx-auto text-center">
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
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="<?= site_url('videojuegos'); ?>">Videojuegos</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="<?= site_url('consolas'); ?>">Consolas</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="<?= site_url('accesorios'); ?>">Accesorios</a>
                        </li>
                        <li class="nav-item px-2 py-2">
                            <a class="nav-link text-uppercase text-dark" href="<?= site_url('digital'); ?>">Digital</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Fin nav-->
  

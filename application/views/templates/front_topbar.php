        <!-- Navbar -->
        <nav class="js-navbar-scroll navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container d-flex align-items-center justify-content-between">
                <a class="navbar-brand" href="<?= base_url('home'); ?>">
                    <img src="assets/img/amm.png" alt="" style="width: 100px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="btn btn-info fas fa-user-tie nav-link" href="<?= base_url('auth'); ?>"> Login</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="nav-link" href="<?= base_url('home'); ?>">Home</a>
                        </li>
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="nav-link" href="<?= base_url('agenda'); ?>">Agenda</a>
                        </li>
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="nav-link" href="<?= base_url('about'); ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="nav-link" href="<?= base_url('artikel'); ?>">Artikel</a>
                        </li>
                        <li class="nav-item mr-4 mb-2 mb-lg-0">
                            <a class="nav-link" href="<?= base_url('contact'); ?>">Contacts</a>
                        </li>
                    </ul>
                    <div>
                        <a class="btn btn-info" href="<?= base_url('ecomerce'); ?>">
                            <i class="fas fa-shopping-cart mr-1"></i> E Comerce
                        </a>
                    </div>
                </div>
            </div>

        </nav>
        <!-- End Navbar -->
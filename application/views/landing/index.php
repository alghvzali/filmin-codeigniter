<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>filmin - Home</title>
    <!-- Favicon -->
    <link href="assets/img/brand/filmin.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?php echo base_url('assets/css/argon.css?v=1.1.0'); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion&display=swap" rel="stylesheet">
</head>

<style>
    .nama-web {
        font-family: 'Damion',
            cursive;
        font-size: 34px;
    }
</style>

<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
            <div class="container">
                <a class="nama-web mr-lg-5" href="<?php base_url() ?>" style="color:white;">
                    <!-- <img src="../assets/img/brand/white.png" alt="brand"> -->
                    filmin
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="<?php base_url() ?>" class="nama-web">
                                    filmin
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                        <!--     <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                <i class="ni ni-ui-04 d-lg-none"></i>
                                <span class="nav-link-inner--text">Components</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl">
                                <div class="dropdown-menu-inner">
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                                        <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                                            <i class="ni ni-spaceship"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="heading text-primary mb-md-1">Getting started</h6>
                                            <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change brand colors and more.</p>
                                        </div>
                                    </a>
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html" class="media d-flex align-items-center">
                                        <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                                            <i class="ni ni-palette"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="heading text-primary mb-md-1">Foundation</h6>
                                            <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and the grid system we used for Argon.</p>
                                        </div>
                                    </a>
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                                        <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                                            <i class="ni ni-ui-04"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h5 class="heading text-warning mb-md-1">Components</h5>
                                            <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                                <i class="ni ni-collection d-lg-none"></i>
                                <span class="nav-link-inner--text">Halaman</span>
                            </a>
                            <div class="dropdown-menu">
                                <a href="<?php base_url() ?>" class="dropdown-item">Beranda</a>
                                <a href="auth/login" class="dropdown-item">Login</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item pr-2">
                            <a class="nav-link nav-link-icon" href="https://www.instagram.com/whoisalghazali" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                                <i class="fa fa-instagram"></i>
                                <span class="nav-link-inner--text d-lg-none">Instagram</span>
                            </a>
                        </li>
                        <li class="nav-item pr-2">
                            <a class="nav-link nav-link-icon" href="https://github.com/alghvzali" target="_blank" data-toggle="tooltip" title="Follow us on Github">
                                <i class="fa fa-github"></i>
                                <span class="nav-link-inner--text d-lg-none">Github</span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('username') == TRUE) {
                            echo "<div class='dropdown'>";
                            echo '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                            echo '<i class="fa fa-user pr-2" aria-hidden="true" style="font-size:1.2rem;"></i>';
                            echo ucwords(strtolower($this->session->userdata('username')));
                            echo '</button>';
                            echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                            echo '<a class="dropdown-item" href="dashboard">Dashboard</a>';
                            echo '<a class="dropdown-item" href="auth/logout">Logout</a>';
                            echo '</div>';
                        } else {
                            echo '<li class="nav-item d-none d-lg-block ml-lg-4">';
                            echo '<a href="auth/login" class="btn btn-neutral btn-icon">';
                            echo '<span class="btn-inner--icon">';
                            echo '<i class="fa fa-sign-in mr-2"></i>';
                            echo '</span>';
                            echo '<span class="nav-link-inner--text">Masuk</span>';
                            echo '</a>';
                            echo '</li>';
                            echo '</div>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="position-relative">
            <!-- shape Hero -->
            <section class="section section-lg section-shaped pb-250">
                <div class="shape shape-style-1 shape-default">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="container py-lg-md d-flex">
                    <div class="col px-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="display-3  text-white"><span>Website pemesanan film</span>Terpercaya</h1>
                                <p class="lead  text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis est urna, sed venenatis velit porttitor vel. Curabitur pretium sed lacus sed sodales. Suspendisse eget leo ultrices erat aliquam bibendum sed id orci.</p>
                                <!-- <div class="btn-wrapper">
                                    <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-info btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="fa fa-code"></i></span>
                                        <span class="btn-inner--text">Components</span>
                                    </a>
                                    <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-white btn-icon mb-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                        <span class="btn-inner--text">Download HTML</span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SVG separator -->
                <div class="separator separator-bottom separator-skew">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
            </section>
            <!-- 1st Hero Variation -->
        </div>
        <section class="section section-lg pt-lg-0 mt--200">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row row-grid">
                            <?php foreach ($film as $row) : ?>
                                <div class="col-lg-4">
                                    <div class="card card-lift--hover shadow border-0 mb-4">
                                        <img class="card-img-top" src="./upload/poster/<?php echo $row->poster; ?>" alt="Card image cap" style="max-height:280px;">
                                        <div class="card-body py-4">
                                            <h6 class="text-primary text-uppercase"><?php echo $row->judul; ?></h6>
                                            <p class="description mb-1"><?php echo substr($row->deskripsi, 0, 100); ?>...</p>
                                            <p class="description">Rating : <?php echo $row->rating ?></p>
                                            <h6 class="text-primary">Rp <?php echo rupiah($row->harga); ?></h6>
                                            <a class="btn btn-primary mt-1" href="pemesanan/add">Pesan sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>
    <footer class="footer has-cards">
        <div class="container">
            <div class="row row-grid align-items-center my-md">
                <div class="col-lg-6">
                    <h3 class="text-primary font-weight-light mb-2">Terima kasih telah mendukung kami!</h3>
                    <h4 class="mb-0 font-weight-light">Hubungi kami pada salah satu platform ini.</h4>
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <a target="_blank" href="https://www.instagram.com/whoisalghazali" class="btn btn-neutral btn-icon-only btn-instagram btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a target="_blank" href="https://github.com/alghvzali" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us on Github">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2020 <a href="#" class="nama-web" style="font-size:22px;">filmin </a> by <a href="https://alghvzali.github.io" target="_blank">Al-Ghazali</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav nav-footer justify-content-end">
                        <!-- <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/popper/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/headroom/headroom.min.js'); ?>"></script>
    <!-- Argon JS -->
    <script src="<?php echo base_url('assets/js/argon.js?v=1.1.0'); ?>"></script>
</body>

</html>
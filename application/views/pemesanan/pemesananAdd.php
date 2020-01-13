<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?php echo $pageTitle ?></title>
    <!-- Favicon -->
    <link href="../assets/img/brand/filmin.png" rel="icon" type="image/png">
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
                <a class="nama-web mr-lg-5" href="../" style="color:white;">
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
                                <a class="nama-web mr-lg-5" href="../">
                                    <!-- <img src="../assets/img/brand/white.png" alt="brand"> -->
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
                        <!-- <li class="nav-item dropdown">
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
                                <a href="../" class="dropdown-item">Beranda</a>
                                <a href="../auth/login" class="dropdown-item">Login</a>
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
                            echo '<a class="dropdown-item" href="../dashboard">Dashboard</a>';
                            echo '<a class="dropdown-item" href="../auth/logout">Logout</a>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '<li class="nav-item d-none d-lg-block ml-lg-4">';
                            echo '<a href="' . base_url('auth/login') . '" class="btn btn-neutral btn-icon">';
                            echo '<span class="btn-inner--icon">';
                            echo '<i class="fa fa-sign-in mr-2"></i>';
                            echo '</span>';
                            echo '<span class="nav-link-inner--text">Masuk</span>';
                            echo '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <section class="section section-lg bg-gradient-primary">
            <div class="container pt-lg pb-300">
                <div class="row text-center justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="display-3 text-white">Form pemesanan</h2>
                        <p class="lead text-white">Isilah form dengan data yang benar</p>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="section section-lg pt-lg-0 section-contact-us">
            <div class="container">
                <div class="row justify-content-center mt--300">
                    <div class="col-lg-8">
                        <div class="card bg-gradient-secondary shadow">
                            <div class="card-body p-lg-5">
                                <form method="POST" action="<?php echo site_url('pemesanan/add') ?>" enctype="multipart/form-data">
                                    <?php if (validation_errors()) : ?>
                                        <div class="col-sm-12">
                                            <div class="alert alert-danger" role="alert">
                                                <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->session->flashdata('success')) : ?>
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <span class="white-text"><?php echo $this->session->flashdata('success'); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <input type="hidden" name="status" value="Belum lunas" />
                                    <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" />
                                    <div class="container">
                                        <div class="row px-2">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="nama_pembeli">Nama pembeli</label>
                                                    <input type="text" id="nama_pembeli" name="nama_pembeli" class="form-control form-control-alternative <?php echo form_error('nama_pembeli') ? 'is-invalid' : '' ?>" placeholder="Nama pembeli">
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nama_pembeli') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <label class="form-control-label" for="email">Email</label>
                                                <input type="email" id="email" name="email" class="form-control form-control-alternative <?php echo form_error('email') ? 'is-invalid' : '' ?>" placeholder="Email">
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('email') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row px-2">
                                            <div class="col-lg-12">
                                                <label class="form-control-label" for="nama_film">Nama film</label>
                                                <select class="form-control" name="nama_film" id="nama_film">
                                                    <?php
                                                    foreach ($film as $row) {
                                                        echo '<option value="' . $row->judul . '">' . $row->judul . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="rating">Rating</label>
                                        <input type="text" id="rating" name="rating" class="form-control form-control-alternative <?php echo form_error('tahun_terbit') ? 'is-invalid' : '' ?>" placeholder="Rating">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('rating') ?>
                                        </div>
                                    </div>
                                </div> -->
                                        </div>
                                        <div class="row px-2 pt-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="bukti_pembayaran">Bukti Pembayaran</label>
                                                    <input class="form-control-file <?php echo form_error('bukti_pembayaran') ? 'is-invalid' : '' ?>" type="file" name="bukti_pembayaran" required />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('bukti_pembayaran') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row px-2 ">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="alamat">Alamat</label>
                                                    <textarea name="alamat" class="form-control form-control-alternative <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" rows="3" placeholder="Alamat"></textarea>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('alamat') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row px-2">
                                        <div class="col text-right mb-4 mt-4 mr-3">
                                            <button type="submit" name="submit" value="add_pemesanan" class="btn btn-primary">Pesan</button>
                                        </div>
                                    </div>
                                </form>
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
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
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
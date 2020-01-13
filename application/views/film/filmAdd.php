<div class="row mt-2">
    <div class="col-xl-12 mb-5 mb-xl-0" style="margin-bottom:180px !important;">
        <div class=" card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0"><?php echo $pageTitle; ?></h3>
                    </div>
                    <!-- <div class="col text-right">
                        <a href="users/add" class="btn btn-sm btn-primary">Tambah</a>
                    </div> -->
                </div>
            </div>
            <form method="POST" action="<?php echo site_url('film/add') ?>" enctype="multipart/form-data">
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
                <div class="container">
                    <div class="row px-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="judul">Judul</label>
                                <input type="text" id="judul" name="judul" class="form-control form-control-alternative <?php echo form_error('judul') ? 'is-invalid' : '' ?>" placeholder="Judul film">
                                <div class="invalid-feedback">
                                    <?php echo form_error('judul') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-control-label" for="harga">Harga</label>
                            <input type="number" id="harga" name="harga" class="form-control form-control-alternative <?php echo form_error('harga') ? 'is-invalid' : '' ?>" placeholder="Harga tiket">
                            <div class="invalid-feedback">
                                <?php echo form_error('harga') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="tahun_terbit">Tahun terbit</label>
                                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control form-control-alternative <?php echo form_error('tahun_terbit') ? 'is-invalid' : '' ?>" placeholder="Tahun terbit">
                                <div class="invalid-feedback">
                                    <?php echo form_error('tahun_terbit') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="rating">Rating</label>
                                <input type="text" id="rating" name="rating" class="form-control form-control-alternative <?php echo form_error('tahun_terbit') ? 'is-invalid' : '' ?>" placeholder="Rating">
                                <div class="invalid-feedback">
                                    <?php echo form_error('rating') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="poster">Poster</label>
                                <input class="form-control-file <?php echo form_error('poster') ? 'is-invalid' : '' ?>" type="file" name="poster" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('poster') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control form-control-alternative <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" rows="3" placeholder="Deskripsi film..."></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('deskripsi') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col text-right mb-4 mt-4">
                            <button type="submit" name="submit" value="add_film" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </form>
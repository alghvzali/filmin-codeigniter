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
            <form method="POST" action="">
                <?php if (validation_errors()) : ?>
                    <div class="col-sm-12">
                        <div class="alert alert-danger" role="alert">
                            <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($message = $this->session->flashdata('message')) : ?>
                    <div class="col-sm-12">
                        <div class="alert <?php echo ($message['status']) ? 'alert-success' : 'alert-danger'; ?>">
                            <span class="white-text"><?php echo $message['message']; ?></span>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="container">
                    <div class="row px-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $user->username; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Alamat Email</label>
                                <input type="email" id="email" name="email" class="form-control form-control-alternative" value="<?php echo $user->email; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control form-control-alternative" placeholder="Nama" value="<?php echo $user->nama; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control form-control-alternative" placeholder="Password" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="active">Status Active</label>
                                <div class="custom-control custom-radio mb-3">
                                    <input name="active" class="custom-control-input" id="customRadio5" type="radio" <?php echo ($user->active === '1') ? 'checked' : ''; ?> value="1">
                                    <label class="custom-control-label" for="customRadio5">Ya</label>
                                </div>
                                <div class="custom-control custom-radio mb-3">
                                    <input name="active" class="custom-control-input" id="customRadio6" type="radio" <?php echo ($user->active === '0') ? 'checked' : ''; ?> value="0">
                                    <label class="custom-control-label" for="customRadio6">Tidak</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col-lg-12">
                            <label class="form-control-label" for="level">Level</label>
                            <select class="form-control" name="level" id="level">
                                <option <?php echo ($user->level === 'administrator') ? 'selected' : ''; ?> value="administrator">Administrator</option>
                                <option <?php echo ($user->level === 'member') ? 'selected' : ''; ?> value="member">Member</option>
                                <option <?php echo ($user->level === 'manager') ? 'selected' : ''; ?> value="manager">Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="row px-2">
                        <div class="col text-right mb-4 mt-4">
                            <button type="submit" name="submit" value="<?php echo $user->id; ?>" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
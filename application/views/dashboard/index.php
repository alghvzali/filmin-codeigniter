<div class="row mt-2">
    <div class="col-xl-12 mb-5 mb-xl-0" style="margin-bottom:180px !important;">
        <div class=" card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0"><?php echo $pageTitle; ?></h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 mb-4">
                        <div class="card shadow card-stats mb-lg-0" style="height:8rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-3">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Film</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $this->db->count_all_results('film'); ?></span>
                                    </div>
                                    <div class="col-auto mt-3">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-film"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <div class="card shadow card-stats mb-lg-0" style="height:8rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-3">
                                        <h5 class="card-title text-uppercase text-muted mb-0">User</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $this->db->count_all_results('users'); ?></span>
                                    </div>
                                    <div class="col-auto mt-3">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mb-4">
                        <div class="card shadow card-stats mb-lg-0" style="height:8rem;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-3">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Pemesanan</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $this->db->count_all_results('pemesanan'); ?></span>
                                    </div>
                                    <div class="col-auto mt-3">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-file-invoice-dollar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
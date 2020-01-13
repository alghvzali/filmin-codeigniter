<div class="data mt-2">

    <div class="col-xl-12 mb-5 mb-xl-0" style="margin-bottom:180px !important;">
        <form method="get" action="">
            <!-- <label>Filter Berdasarkan</label><br>
            <select name="filter" id="filter">
                <option value="">Pilih</option>
                <option value="1">Per Tanggal</option>
                <option value="2">Per Bulan</option>
                <option value="3">Per Tahun</option>
            </select>
            <br /><br /> -->
            <div class="data px-2 mb-3">
                <div class="col-lg-12">
                    <label class="form-control-label" for="filter" style="color:white;">Filter berdasarkan</label>
                    <select class="form-control" name="filter" id="filter">
                        <option value="">Pilih</option>
                        <!-- <option value="1">Per Tanggal</option> -->
                        <option value="2">Per Bulan</option>
                        <option value="3">Per Tahun</option>
                    </select>
                </div>
            </div>
            <!-- <div id="form-tanggal">
                <label>Tanggal</label><br>
                <input type="text" name="tanggal" class="input-tanggal" />
                <br /><br />
            </div> -->
            <div class="data px-2">
                <div class="col-lg-6">
                    <!-- <div class="form-group" id="form-tanggal">
                        <label class="form-control-label" for="tanggal">Tanggal</label>
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control input-tanggal" placeholder="Pilih tanggal" type="text" name="tanggal">
                        </div>
                    </div> -->
                    <div class="form-group" id="form-bulan">
                        <label class="form-control-label" for="bulan">Bulan</label>
                        <select class="form-control" name="bulan">
                            <option value="">Pilih</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="form-group" id="form-tahun">
                        <label class="form-control-label" for="tahun">Tahun</label>
                        <select class="form-control" name="tahun">
                            <option value="">Pilih</option>
                            <?php
                            foreach ($option_tahun as $data) { // Ambil data tahun dari model yang dikirim dari controller
                                echo '<option value="' . $data->tahun . '">' . $data->tahun . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>



            <!-- <div id="form-bulan">
                <label>Bulan</label><br>
                <select name="bulan">
                    <option value="">Pilih</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
                <br /><br />
            </div> -->
            <div class="data px-2">
                <div class="col-lg-12 mb-4">
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                    <a href="<?php echo base_url('pemesanan'); ?>">Reset Filter</a>
                </div>
            </div>


        </form>
        <b><?php echo $ket; ?></b><br /><br />
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="data align-items-center">
                    <div class="col">
                        <h3 class="mb-0"><?php echo $pageTitle; ?></h3>
                    </div>
                <?php if ($this->session->userdata('level') === 'manager') : ?>
                    <div class="col text-right">
                        <a href="<?php echo $url_cetak; ?>" class="btn btn-sm btn-primary">Cetak PDF</a>
                    </div>
                <?php endif; ?>
                </div>
            </div>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="col-sm-12">
                    <div class="alert alert-success">
                        <span class="white-text"><?php echo $this->session->flashdata('success'); ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Film yang dipesan</th>
                            <th scope="col">Tanggal Pemesanan</th>
                            <th scope="col">Bukti Pembayaran</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                            <?php if ($this->session->userdata('level') === 'administrator') : ?>
                                <th scope="col">Aksi</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($pemesanan)) {
                            $no = 0;
                            foreach ($pemesanan as $data) {  ?>
                                <?php $tgl = date('d-m-Y', strtotime($data->tanggal)); ?>
                                <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $data->nama_pembeli; ?></td>
                                    <td><?php echo $data->email; ?></td>
                                    <td><?php echo $data->nama_film; ?></td>
                                    <td><?php echo $tgl; ?></td>
                                    <td class="center-align"><img src="<?php echo base_url("upload/pembayaran/" . $data->bukti_pembayaran); //base_url('upload/poster/'.$data->poster) 
                                                                        ?>" alt="" width="74"></td>
                                    <td><?php echo substr($data->alamat, 0, 40); ?></td>
                                    <td class="center-align"><?php echo $data->status; ?></td>
                                    <?php if ($this->session->userdata('level') === 'administrator') : ?>
                                        <td class="center-align">
                                            <a href="<?php echo base_url('pemesanan/lunas/' . $data->id); ?>" class="btn btn-success"><i class="fas fa-check"></i>
                                                Lunas</a>
                                            <a href="<?php echo base_url('pemesanan/delete/' . $data->id); ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
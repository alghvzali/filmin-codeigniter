<div class="row mt-2">
    <div class="col-xl-12 mb-5 mb-xl-0" style="margin-bottom:180px !important;">
        <div class=" card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0"><?php echo $pageTitle; ?></h3>
                    </div>
                    <div class="col text-right">
                        <a href="users/add" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                </div>
            </div>
            <?php if ($message = $this->session->flashdata('message')) : ?>
                <div class="col-sm-12">
                    <div class="alert <?php echo ($message['status']) ? 'alert-success' : 'alert-danger'; ?>">
                        <span class="white-text"><?php echo $message['message']; ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">Level</th>
                            <th scope="col">Terakhir Login</th>
                            <th scope="col">Email</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($users as $row) : ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $row->username; ?></td>
                                <td><?php echo $row->level; ?></td>
                                <td class="center-align"><?php echo $row->last_login; ?></td>
                                <td class="center-align"><?php echo $row->email; ?></td>
                                <td class="center-align">
                                    <a href="<?php echo base_url('users/edit/' . $row->id); ?>" class="btn btn-primary"><i class="fas fa-edit"></i>
                                        Ubah</a>
                                    <a href="<?php echo base_url('users/delete/' . $row->id); ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
<div class="row mt-2">    
    <div class="col-xl-12 mb-5 mb-xl-0" style="margin-bottom:180px !important;">
        <div class=" card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0"><?php echo $pageTitle; ?></h3>
                    </div>
                    <div class="col text-right">
                        <a href="film/add" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
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
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Tahun terbit</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($film as $row) : ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $row->judul; ?></td>
                                <td><?php echo substr($row->deskripsi, 0, 80); ?>...</td>
                                <td><?php echo $row->tahun_terbit; ?></td>
                                <td class="center-align"><?php echo $row->rating; ?></td>
                                <td class="center-align"><img src="./upload/poster/<?php echo $row->poster; //base_url('upload/poster/'.$row->poster) 
                                                                    ?>" alt="" width="74"></td>
                                <td class="center-align">Rp <?php echo rupiah($row->harga); ?></td>
                                <td class="center-align">
                                    <a href="<?php echo base_url('film/edit/' . $row->id); ?>" class="btn btn-primary"><i class="fas fa-edit"></i>
                                        Ubah</a>
                                    <a href="<?php echo base_url('film/delete/' . $row->id); ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
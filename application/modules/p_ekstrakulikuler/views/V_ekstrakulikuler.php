<?php tampilnotif()?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scrollable-modal"><i class="fas fa-plus"></i> Tambah Ekstrakulikuler</button>


<div class="row">
    <div class="col-12 mt-4">
        <div class="card-columns">
        <?php 
            $no=1;
            foreach($tampil as $rowP) { ?>
            <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/admin/images/ekskul/<?php echo $rowP->gambar; ?>"
                    alt="Card image cap" style="width: 400px; height: 300px;">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $rowP->nama_ekskul?></h4>
                    <div class="text-right">
                        <a href="<?php echo base_url('p_ekstrakulikuler/editview/'. encrypt_url($rowP->id_ekskul)); ?>" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#scrollable-modal2">
                            Edit
                        </a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">Hapus</button>
                        <a href="<?php echo base_url('p_ekstrakulikuler/detail/'. encrypt_url($rowP->id_ekskul)); ?>" type="button" class="btn btn-sm btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            <?php $no++;} ?>
        </div>
    </div>
</div>

<!-- Tambah Prestasi -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
    aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Tambah Ekstrakulikuler</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="<?php echo base_url('p_ekstrakulikuler/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto">Foto Ekstrakulikuler</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaekstra">Nama Ekstrakulikuler</label>
                        <input class="form-control" name="nama_ekskul" type="text" id="namaekstra" placeholder="Nama Ekstrakulikuler" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsiekstra">Deskripsi</label>
                        <textarea class="form-control" name="keterangan_ekskul" rows="3" type="text" id="deskripsiekstra" placeholder="Deskripsi Ekstrakulikuler" require></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </>
            </div>
        </div>
    </div>
</div>

<!-- Edit Prestasi -->
<!-- <div class="modal fade" id="scrollable-modal2" tabindex="-1" role="dialog"
    aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Edit Ekstrakulikuler</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="<?php echo base_url('p_ekstrakulikuler/edit') ?>" method="POST" enctype="multipart/form-data">
                    <input name="id" value="<?php echo $tampil['id_ekskul'] ?>" type="hidden" class="form-control">    
                    <div class="form-group">
                        <label for="foto">Foto Ekstrakulikuler</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="gambar" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaekstra">Nama Ekstrakulikuler</label>
                        <input class="form-control" name="nama_ekskul" type="text" id="namaekstra" placeholder="Nama Ekstrakulikuler" value="<?php echo $tampil['nama_ekskul']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsiekstra">Deskripsi</label>
                        <textarea class="form-control" name="keterangan_ekskul" rows="3" type="text" id="deskripsiekstra" placeholder="Deskripsi Ekstrakulikuler" value="<?php echo $tampil['keterangan_ekskul']?>" require></textarea>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->


<!-- Hapus -->
<?php $no = 1; foreach ($tampil as $rowP) { ?>
<div id="hapus<?php echo $no ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-danger">
                <h4 class="modal-title" id="danger-header-modalLabel">Hapus Ekstrakulikuler</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?php echo base_url('p_ekstrakulikuler/hapus') ?>" method="POST" enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?php echo $rowP->id_ekskul ?>" class="form-control">
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus ekstrakulikuler <b><?php echo $rowP->nama_ekskul ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $no++; } ?>
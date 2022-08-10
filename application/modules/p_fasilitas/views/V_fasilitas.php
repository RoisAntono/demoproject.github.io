<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scrollable-modal"><i class="fas fa-plus"></i> Tambah Fasilitas</button>

<div class="row mt-3">
    <?php $no = 1; foreach ($tampil as $rowP) { ?>
    <div class="col-sm-3">
        <div class="card">
            <img class="card-img-top img-fluid" src="assets/admin/images/fasilitas/<?php echo $rowP->foto_fasilitas?>"
                alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?php echo $rowP->nama_fasilitas?></h4>
                <div class="text-right">
                    <a href="javascript:void(0)" class="btn btn-sm btn-danger btn-circle" type="button">
                        <i data-feather="trash-2"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-circle" type="button" data-toggle="modal" data-target="#editfasilitas">
                        <i data-feather="edit"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php $no++; } ?>
</div>

<!-- Tambah Fasilitas -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Tambah Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="<?php echo base_url('p_fasilitas/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="foto">Foto Fasilitas</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="gambar" type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="programkeahlian">Nama Fasilitas</label>
                        <input name="nama_fasilitas" class="form-control" type="text" id="programkeahlian" placeholder="Nama Fasilitas" required>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Fasilitas -->
<div class="modal fade" id="editfasilitas" tabindex="-1" role="dialog" aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Tambah Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="<?php echo base_url('p_fasilitas/edit') ?>" method="POST" enctype="multipart/form-data">
                    <input name="id" value="<?php echo $tampiledit['id_fasilitas']?>" type="text" class="form-control">
                    <div class="form-group">
                        <label for="foto">Foto Fasilitas</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="gambar" type="file" class="custom-file-input" id="fotofasilitas">
                                <label class="custom-file-label" for="fotofasilitas">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Nama Fasilitas</label>
                        <input name="nama_fasilitas" class="form-control" type="text" id="fasilitas" value="<?php echo $tampiledit['nama_fasilitas']?>" placeholder="Nama Fasilitas">
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
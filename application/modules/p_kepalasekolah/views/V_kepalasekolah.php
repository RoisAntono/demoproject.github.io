<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#perbaruikepsek"><i class="fas fa-edit"></i> Update Kepala Sekolah</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahdata"><i class="fas fa-plus"></i> Tambah Data Kepala Sekolah</button>

<div class="row mt-4">
    <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="assets/admin/images/users/5.jpg" alt="image" class="rounded-circle" width="250">
                    </div>
                    <hr>
                    <label class="col-md-12">Nama :</label>
                    <div class="card-title col-md-12">
                        <p>Nama Kepsek</p>
                    </div>
                    <label class="col-md-12">Tahun Jabatan :</label>
                    <div class="card-title col-md-12">
                        <p>2020 - 2022</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Data Kepala Sekolah</div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered display no-wrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kepala Sekolah</th>
                                <th>Masa Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tiger</td>
                                <td>Nixon</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus">Hapus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Kepala Sekolah -->
<div class="modal fade" id="perbaruikepsek" tabindex="-1" role="dialog"
    aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Update Kepala Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="#">
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namakepsek">Nama Kepala Sekolah</label>
                        <input class="form-control" type="text" id="namakepsek" placeholder="Nama Kepala Sekolah" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input class="form-control" type="text" id="jabatan" placeholder="2021 - Sekarang" required>
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

<!-- Tambah Data Kepala Sekolah -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog"
    aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Update Kepala Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="#">
                    <div class="form-group">
                        <label for="namakepsek">Nama Kepala Sekolah</label>
                        <input class="form-control" type="text" id="namakepsek" placeholder="Nama Kepala Sekolah" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input class="form-control" type="text" id="jabatan" placeholder="2021 - Sekarang" required>
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


<!-- Hapus
<?php $no = 1; foreach ($tampil as $rowP) { ?>
<div id="hapus<?php echo $no ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-danger">
                <h4 class="modal-title" id="danger-header-modalLabel">Hapus Berita</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?php echo base_url('p_berita/hapus') ?>" method="POST" enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?php echo $rowP->id_berita ?>" class="form-control">
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus berita <b><?php echo $rowP->judul_berita ?></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $no++; } ?> -->
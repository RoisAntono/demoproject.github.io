<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahguru"><i class="fas fa-plus"></i> Tambah Guru atau Karyawan</button>

<div class="card mt-4">
    <div class="card-body">
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered display no-wrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Jabatan</th>
                        <th>Mapel</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $no = 1; foreach ($tampil as $rowP) { ?>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><?php echo $rowP->nama?></td>
                        <td><?php echo $rowP->jeniskelamin?></td>
                        <td><?php echo $rowP->jabatan?></td>
                        <td><?php echo $rowP->mapel?></td>
                        <td><?php echo $rowP->email?></td>
                        <td class="text-center">
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>"><i class="fas fa-trash"></i> Hapus</button>
                        </td>
                    </tr>
                </tbody>
                <?php $no++; } ?>
            </table>
        </div>
    </div>
</div>

<!-- Tambah Data Kepala Sekolah -->
<div class="modal fade" id="tambahguru" tabindex="-1" role="dialog"
    aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Tambah Data Guru atau Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="<?php echo base_url('p_dataguru/tambah') ?>" method="POST">
                    <div class="form-group">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input name="nama" class="form-control" type="text" id="namalengkap" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="jeniskelamin" value="L">
                                <label class="custom-control-label" for="customControlValidation2">Laki - Laki</label>
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-jeniskelamin" value="P">
                                <label class="custom-control-label" for="customControlValidation3">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input name="jabatan" class="form-control" type="text" id="jabatan" placeholder="Masa Jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="mapel">Mata Pelajaran</label>
                        <input name="mapel" class="form-control" type="text" id="mapel" placeholder="Mata Pelajaran" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" class="form-control" type="email" id="email" placeholder="Email@example.com" required>
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

<!-- Hapus -->
<?php $no = 1; foreach ($tampil as $rowP) { ?>
<div id="hapus<?php echo $no ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="danger-header-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-colored-header bg-danger">
                <h4 class="modal-title" id="danger-header-modalLabel">Hapus Berita</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form action="<?php echo base_url('p_dataguru/hapus') ?>" method="POST" enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?php echo $rowP->id_guru ?>" class="form-control">
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus berita <b><?php echo $rowP->nama ?></b></p>
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
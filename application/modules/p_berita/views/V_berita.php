<a href="<?php echo base_url('p_berita/tambahview'); ?>">
    <button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Buat Berita Baru</button>
</a>

<div class="row">
    <div class="col-12 mt-4">
        <div class="card-columns">
            <?php $no = 1; foreach ($tampil as $rowP) { ?>
            <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/admin/images/berita/<?php echo $rowP->foto_berita?>"
                    alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $rowP->judul_berita?></h4>
                    <div class="text-right">
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">Hapus</button>
                        <a href="<?php echo base_url('p_berita/detailview/' . encrypt_url($rowP->id_berita)); ?>" class="btn btn-sm btn-primary" type="button">Cek Detail</a>
                    </div>
                </div>
            </div>
            <?php $no++; } ?>
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
<?php $no++; } ?>
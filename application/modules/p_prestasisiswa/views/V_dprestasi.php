<a href="<?php echo base_url('p_prestasisiswa'); ?>" type="button" class="btn btn-primary">Kembali</a>

<div class="card mt-4">
    <div class="card-body">
        <div class="text-center">
            <img src="<?php echo base_url() ?>assets/admin/images/prestasi/<?php echo $tampil['foto_prestasi'] ?>" alt="image"  width="600">
        </div>
        <hr>
        <div class="card-title col-md-12">
            <p><?php echo $tampil['nama_prestasi'] ?></p>
        </div>
        <div class="col-md-12">
            <p><?php echo $tampil['deskripsi_prestasi'] ?></p>
        </div>
    </div>
</div>
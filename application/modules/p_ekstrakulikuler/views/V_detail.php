<a href="<?php echo base_url('p_ekstrakulikuler'); ?>" type="button" class="btn btn-primary">Kembali</a>
<div class="card mt-4">
    <div class="card-body">
        <div class="text-center">
            <img src="<?php echo base_url() ?>assets/admin/images/ekskul/<?php echo $tampil['gambar'] ?>" alt="image"  width="250">
        </div>
        <hr>
        <div class="card-title col-md-12">
            <p><?php echo $tampil['nama_ekskul'] ?></p>
        </div>
        <div class="col-md-12">
            <p><?php echo $tampil['keterangan_ekskul'] ?></p>
        </div>
    </div>
</div>
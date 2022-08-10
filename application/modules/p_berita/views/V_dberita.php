<a href="<?php echo base_url('p_berita/editview/' . encrypt_url($tampil['id_berita'])); ?>">
    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Berita</button>
</a>

<div class="card mt-4">
    <div class="card-body">
        <div class="text-center">
            <img src="<?php echo base_url() ?>assets/admin/images/berita/<?php echo $tampil['foto_berita'] ?>" alt="image" class="rounded-circle" width="250">
        </div>
        <hr>
        <div class="card-title col-md-12">
            <p><?php echo $tampil['judul_berita'] ?></p>
        </div>
        <div class="col-md-12">
            <p><?php echo $tampil['deskripsi_berita'] ?></p>
        </div>
    </div>
</div>
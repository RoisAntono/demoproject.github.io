<?php $no = 1; foreach ($tampil as $rowP) { ?>
<div class="my-4">
    <a href="<?php echo base_url('p_visimisi/editview/' . encrypt_url($rowP->id_visimisi)); ?>">
        <button type="button" class="btn waves-effect waves-light btn-primary">Edit Visi Misi</button>
    </a>
</div>
<div class="card">
    <div class="card-body">
        <div class="card-title text-center">
            <h3>
                Visi Misi
            </h3>
        </div><hr>
        <?php echo $rowP->visimisi;?>
    </div>
</div>

<?php $no++; } ?>
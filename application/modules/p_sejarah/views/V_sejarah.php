<?php $no = 1; foreach ($tampil as $rowP) { ?>
<div class="my-4">
    <a href="<?php echo base_url('p_sejarah/editview/' . encrypt_url($rowP->id_sejarah)); ?>">
        <button type="button" class="btn waves-effect waves-light btn-primary">Edit Sejarah</button>
    </a>
</div>
<div class="card">
    <div class="card-body">
        <div class="card-title text-center">
            <h3>
                SEJARAH
            </h3>
        </div><hr>
        <?php echo $rowP->sejarah;?>
    </div>
</div>


<?php $no++; } ?>
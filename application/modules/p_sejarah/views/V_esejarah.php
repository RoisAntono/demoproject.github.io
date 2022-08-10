<div class="card">
    <div class="card-body p-3">
        <form action="<?php echo base_url('p_sejarah/edit') ?>" method="POST" enctype="multipart/form-data">
            <input name="id" value="<?php echo $tampil['id_sejarah']?>" type="hidden" class="form-control">
            <textarea class="editor" name="sejarah" type="text" rows="10"><?php echo $tampil['sejarah']?></textarea>
            <div class="text-right py-3">
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo base_url() ?>ckeditor5/ckeditor.js"></script>
<script>ClassicEditor
    .create( document.querySelector( '.editor' ), {
        
        licenseKey: '',
        
    } )
    .then( editor => {
        window.editor = editor;

    } )
    .catch( error => {
        console.error( 'Oops, something went wrong!' );
        console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
        console.warn( 'Build id: px8tm4wx979n-due7kpixwtih' );
        console.error( error );
    } );
</script>
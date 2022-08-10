<div class="card">
    <div class="card-body">
        <div class="card-title">Berita Baru</div>
        <form class="mt-3 form-horizontal" action="<?php echo base_url('p_berita/tambah') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-body">
                <div class="form-group row">
                    <label class="col-md-2">Foto Berita</label>
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="foto_berita" type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">Judul Berita</label>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input name="judul_berita" type="text" class="form-control" placeholder="Judul Berita" required>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">Deskripsi Berita</label>
                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea class="editor" name="deskripsi_berita" type="text" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <button type="reset" class="btn btn-dark">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- CKEDITOR -->
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
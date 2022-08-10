<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scrollable-modal"><i class="fas fa-edit"></i> Update Denah</button>

<div class="row">
    <div class="col-12 mt-4">
        <div class="card-columns">
            <div class="card">
                <img class="card-img-top img-fluid" src="assets/admin/images/big/img5.jpg" alt="Card image cap">
            </div>
        </div>
    </div>
</div>

<!-- Update Denah Sekolah -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
    aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Update Denah Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="#">
                    <div class="form-group">
                        <label for="foto">Foto Denah</label>
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
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
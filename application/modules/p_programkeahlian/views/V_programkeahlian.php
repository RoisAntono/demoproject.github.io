<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#scrollable-modal"><i class="fas fa-plus"></i> Tambah Program Keahlian</button>

<div class="row">
    <div class="col-12 mt-4">
        <div class="card-columns">
            <div class="card">
                <img class="card-img-top img-fluid" src="assets/admin/images/big/img5.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Rekayasa Perangkat Lunak</h4>
                    <div class="text-right">
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" type="button">Hapus</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary" type="button">Cek Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Program Keahlian -->
<div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
    aria-labelledby="scrollableModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalTitle">Tambah Program Keahlian</h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="pl-3 pr-3" action="#">
                    <div class="form-group">
                        <label for="foto">Foto</label>
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
                    <div class="form-group">
                        <label for="programkeahlian">Program Keahlian</label>
                        <input class="form-control" type="text" id="programkeahlian" placeholder="Program Keahlian" required>
                    </div>
                    <div class="form-group">
                        <label for="sejarahprogramkeahlian">Sejarah Program Keahlian</label>
                        <textarea class="form-control" rows="3" type="text" id="sejarahprogramkeahlian" placeholder="Sejarah Program Keahlian" require></textarea>
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
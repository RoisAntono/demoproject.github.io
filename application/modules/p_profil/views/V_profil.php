<div class="row">
    <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="assets/admin/images/profil/<?php echo $nama['foto_profil'] ?>" alt="image" class="rounded-circle" width="250">
                    </div>
                    <hr>
                    <label class="col-md-12">Nama :</label>
                    <div class="card-title col-md-12">
                        <p><?php echo $nama['nama_depan'] ?> <?php echo $nama['nama_belakang'] ?></p>
                    </div>
                    <label class="col-md-12">Email :</label>
                    <div class="card-title col-md-12">
                        <p><?php echo $nama['email'] ?></p>
                    </div>
                    <label class="col-md-12">no_telephone</label>
                    <div class="card-title col-md-12">
                        <p><?php echo $nama['no_telephone'] ?></p>
                    </div>
                    <label class="col-md-12">User :</label>
                    <div class="card-title col-md-12">
                        <p>Admin</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Ubah Profil</div>
                <form class="mt-3 form-horizontal" action="<?php echo base_url('p_profil/edit') ?>" method="POST" enctype="multipart/form-data">
                <input name="id" value="<?php echo $tampil['id_admin']?>" type="hidden" class="form-control">
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-md-2">Foto</label>
                            <div class="col-md-10">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input name="foto_profil" type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">Nama</label>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="nama_depan" type="text" class="form-control" value="<?php echo $nama['nama_depan'] ?>" placeholder="Nama Depan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="nama_belakang" type="text" class="form-control" value="<?php echo $nama['nama_belakang'] ?>" placeholder="Nama Belakang">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">Email</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" value="<?php echo $nama['email'] ?>" placeholder="123@example.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">Nomer Telephone</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input name="no_telephone" type="tel" class="form-control" value="<?php echo $nama['no_telephone'] ?>" placeholder="08**********" required>
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
        <div class="card">
            <div class="card-body">
                <div class="card-title">Ubah Password</div>
                <form class="mt-3 form-horizontal" action="<?php echo base_url('p_profil/ubahpassword') ?>" method="POST" enctype="multipart/form-data">
                <input name="id" value="<?php echo $tampil['id_admin']?>" type="hidden" class="form-control">
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-md-2">Username</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="<?php echo $nama['username'] ?>" placeholder="Username" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2">Password Baru</label>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control" placeholder="Password">
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
    </div>
</div>

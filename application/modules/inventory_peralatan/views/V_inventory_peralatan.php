



 <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Data Peralatan Dan Mesin 
                                        <div class="page-title-subheading">Data Peralatan Dan Mesin , silahkan gunakan menu di samping untuk menambahkan </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                  
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Menu
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="inventory_peralatan/tambahview">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span> Tambah Data</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo base_url('inventory_peralatan/export'); ?>">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span> Export Excel</span>
                                                    </a>
                                                </li>



                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-cloud-upload"></i>
                                                        <span> Download Format Excel</span>
                                                    </a>
                                                </li>
                                                 <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-cloud-upload"></i>
                                                        <span> Import Excel</span>
                                                    </a>
                                                </li>

                                             

                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div> 


                         <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                            <div class="card">
                                <div class="no-gutters row">
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Nilai Aset</div>
                                                                <div class="widget-subheading">Keseluruhan Data</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-success"><?php echo $totalnilaiaset?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Aset</div>
                                                                <div class="widget-subheading">Keseluruhan Data</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-primary"><?php echo $totalaset?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Nilai Aset Rusak</div>
                                                                <div class="widget-subheading">Keseluruhan Data</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-danger"><?php echo $totalnilaiasetrusak?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Aset Rusak</div>
                                                                <div class="widget-subheading">Keseluruhan Data</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-warning"><?php echo $totalasetrusak?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <ul class="list-group list-group-flush">
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Aset Repair</div>
                                                                <div class="widget-subheading">Keseluruhan Perbaikan</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-success">0</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="bg-transparent list-group-item">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Total Kondisi</div>
                                                                <div class="widget-subheading">Keseluruhan kondisi tidak Baik</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="widget-numbers text-primary"><?php echo $totalasetkurangbaik?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
 <?php tampilnotif()?>
 <div class="main-card mb-3 card">
                            <div class="card-body">
    <div class="container">
      <table id="myTable" class="display nowrap table table-bordered table-condensed table-hover">
        <thead>
                                    <tr>
                                        <th>Detail</th>
                                        <th>Kode Barang</th>
                                        <th>Kategori</th>
                                        <th>Merk</th>
                                        <th>Tipe</th>
                                        <th>Ukuran/CC</th>
                                        <th>Bahan</th>
                                        <th>No.Pabrik</th>
                                        <th >No.Rangka</th>
                                        <th >No.Mesin</th>
                                        <th >No.Polisi</th>
                                        <th >No.BPKB</th>
                                        <th >Tgl. Perolehan</th>
                                        <th >Tgl. Pembukuan</th>
                                        <th >Asal Usul</th>
                                        <th >Kondisi</th>
                                        <th >Keterangan</th>
                                        <th >Nilai</th>
                                        <th >Ruang</th>
                                        <th >Beban</th>
                                        <th >Akumulasi</th>
                                        <th >Nilai Buku</th>
                                        <th >Sisa Usia Manfaat</th>
                                        <th >Status Kalibrasi</th>
                                        <th >Terakhir Kalibrasi</th>
                                        <th >Tanggal Kalibrasi</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                         <?php 
                                         $no=1;
                                         foreach($tampil as $res) { ?>

                                    <tr>
                                        <td>
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa fa-search fa-w-16 "></i>
                                        </button>
                                        <a href="<?php echo base_url('inventory_peralatan/editview/'. encrypt_url($res->id_inv_peralatan)); ?>" type="button" class="btn btn-primary">
                                            <i class="fa fa-pen fa-w-16  "></i>
                                        </a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $no ?>">
                                            <i class="fa fa-trash fa-w-16 "></i>
                                        </button></td>
                                        <td><?php echo $res->kode_barang?></td>
                                        <td><?php echo $res->kategori?></td>
                                        <td><?php echo $res->nama_merk?></td>
                                        <td><?php echo $res->tipe?></td>
                                        <td><?php echo $res->ukuran?></td>
                                        <td><?php echo $res->bahan?></td>
                                        <td><?php echo $res->nopabrik?></td>
                                        <td><?php echo $res->norangka?></td>
                                        <td><?php echo $res->nomesin?></td>
                                        <td><?php echo $res->nopolisi?></td>
                                        <td><?php echo $res->nobpkb?></td>
                                        <td><?php echo $res->tgl_oleh?></td>
                                        <td><?php echo $res->tgl_buku?></td>
                                        <td><?php echo $res->asal?></td>
                                        <td><?php echo $res->kondisi?></td>
                                        <td><?php echo $res->keterangan?></td>
                                        <td><?php echo $res->nilai?></td>
                                        <td><?php echo $res->nama_room?></td>
                                        <td><?php echo $res->beban?></td>
                                        <td><?php echo $res->akumulasi?></td>
                                        <td><?php echo $res->nilaibuku?></td>
                                        <td><?php echo $res->sisausia?></td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>

                                    </tr>



                                       <!-- Modal HAPUS -->
                    <div class="modal fade" id="hapus<?php echo $no ?>"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <form action="<?php echo base_url('inventory_peralatan/hapus') ?>" method="POST" enctype="multipart/form-data">
                          <div class="modal-body">
                             <!--Modal body-->
                                <p class="text-semibold text-main"></p>
                                <p>Anda Yakin Ingin Menghapus <b><?php echo $res->kategori ?></b> ? </p>

                                <input name="id"  type="hidden" value="<?php echo $res->id_inv_peralatan ?>" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                            <button class="btn btn-primary" type="submit" >Hapus</button>
                          </div>
                          </form>

                        </div>
                      </div>
                    </div>


                                         <?php $no++;} ?>

                                    
                                    
                                    
                                    </tbody>
      </table>
            </div>
        </div>
    </div>
</div>


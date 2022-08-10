<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png"  href="<?php echo base_url() ?>assets/admin/images/logo.ico">
    <title>SMK NEGERI 1 GENDING</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/admin/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/admin/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <?php 

        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);

        $menu = $uri_segments[2];

    ?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="<?php echo base_url('dashboard'); ?>">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="<?php echo base_url() ?>assets/admin/images/logo.png" style="width: 50px; height: 50px;" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?php echo base_url() ?>assets/admin/images/logo.png" style="width: 50px; height: 50px;" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?php echo base_url() ?>assets/admin/images/logo-black.png" style="width: 100px; height: auto;" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?php echo base_url() ?>assets/admin/images/logo-white.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url() ?>assets/admin/images/profil/<?php echo $nama['foto_profil'] ?>" alt="user" class="rounded-circle" width="40">
                                <span class="d-lg-inline-block">
                                    <span>Hello,</span>
                                    <span class="text-dark"><?php echo $nama['nama_depan'] ?></span> 
                                    <i data-feather="chevron-down" class="svg-icon"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="<?php echo base_url('p_profil'); ?>">
                                    <i data-feather="user" class="svg-icon mr-2 ml-1"></i>Lihat Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('login/logoutApp' ) ?>">
                                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i>Keluar
                                </a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <!-- Page Dashboard -->
                        <li class="sidebar-item">

                            <?php if ($menu=="p_dashboard"){?>
                            <?php }else{?><a><?php }?>
                                <a class=" sidebar-link" href="<?php echo base_url('p_dashboard'); ?>">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                            </a>
                            </a>

                        </li>

                        <!-- Page Program Keahlian -->
                        <li class="sidebar-item">

                            <?php if ($menu=="p_berita"){?>
                            <?php }else{?><a><?php }?>
                                <a class=" sidebar-link" href="<?php echo base_url('p_berita'); ?>">
                                <i data-feather="radio" class="feather-icon"></i>
                                <span class="hide-menu">Berita</span>
                            </a>
                            </a>
                            </a>

                        </li>

                        <!-- Page Profil -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="globe" class="feather-icon"></i>
                                <span class="hide-menu">Profil</span>
                            </a>

                            <ul aria-expanded="false" class="collapse  first-level base-level-line">

                                <li class="sidebar-item">

                                    <?php if ($menu=="p_sejarah"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_sejarah'); ?>">
                                        <span class="hide-menu">Sejarah</span>
                                    </a>

                                </li>
                                <li class="sidebar-item">

                                    <?php if ($menu=="p_visimisi"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_visimisi'); ?>">
                                        <span class="hide-menu">Visi Misi</span>
                                    </a>

                                </li>
                                <li class="sidebar-item">

                                    <?php if ($menu=="p_kepalasekolah"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_kepalasekolah'); ?>">
                                        <span class="hide-menu">Kepala Sekolah</span>
                                    </a>

                                </li>
                                <li class="sidebar-item">

                                    <?php if ($menu=="p_dataguru"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_dataguru'); ?>">
                                        <span class="hide-menu">Guru & Karyawan</span>
                                    </a>

                                </li>

                            </ul>
                        </li>

                        <!-- Page Karya Siswa -->
                        <li class="sidebar-item">

                            <?php if ($menu=="p_karyasiswa"){?>
                            <?php }else{?><a><?php }?>
                                <a class=" sidebar-link" href="<?php echo base_url('p_karyasiswa'); ?>">

                                <i data-feather="image" class="feather-icon"></i>
                                <span class="hide-menu">Karya Siswa</span>
                            </a>
                            </a>
                            </a>

                        </li>

                        <!-- Page Program Keahlian -->
                        <li class="sidebar-item">

                            <?php if ($menu=="p_programkeahlian"){?>
                            <?php }else{?><a><?php }?>
                                <a class=" sidebar-link" href="<?php echo base_url('p_programkeahlian'); ?>">
                                <i data-feather="briefcase" class="feather-icon"></i>
                                <span class="hide-menu">Program Keahlian</span>
                            </a>
                            </a>
                            </a>

                        </li>

                        <!-- Page Kesiswaan -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="award" class="feather-icon"></i>
                                <span class="hide-menu">Kesiswaan</span>
                            </a>

                            <ul aria-expanded="false" class="collapse  first-level base-level-line">

                                <li class="sidebar-item">

                                    <?php if ($menu=="p_osis"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_osis'); ?>">
                                        <span class="hide-menu">OSIS</span>
                                    </a>

                                </li>
                                <li class="sidebar-item">

                                    <?php if ($menu=="p_ekstrakulikuler"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_ekstrakulikuler'); ?>">
                                        <span class="hide-menu">Ekstrakulikuler</span>
                                    </a>

                                </li>
                                <li class="sidebar-item">

                                    <?php if ($menu=="p_prestasisiswa"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_prestasisiswa'); ?>">
                                        <span class="hide-menu">Prestasi Siswa</span>
                                    </a>

                                </li>

                            </ul>
                        </li>

                        <!-- Page Sarana & Prasarana -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="book-open" class="feather-icon"></i>
                                <span class="hide-menu">Sarana & Prasarana</span>
                            </a>

                            <ul aria-expanded="false" class="collapse  first-level base-level-line">

                                <li class="sidebar-item">

                                    <?php if ($menu=="p_denahsekolah"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_denahsekolah'); ?>">
                                        <span class="hide-menu">Denah Sekolah</span>
                                    </a>

                                </li>
                                <li class="sidebar-item">

                                    <?php if ($menu=="p_fasilitas"){?>
                                    <?php }else{?><a><?php }?>
                                    <a  class="sidebar-link" href="<?php echo base_url('p_fasilitas'); ?>">
                                        <span class="hide-menu">Fasilitas</span>
                                    </a>

                                </li>

                            </ul>
                        </li>

                        <!-- Page Contact -->
                        <li class="sidebar-item">

                            <?php if ($menu=="p_kontak"){?>
                            <?php }else{?><a><?php }?>
                                <a class=" sidebar-link" href="<?php echo base_url('p_kontak'); ?>">
                                <i data-feather="phone" class="feather-icon"></i>
                                <span class="hide-menu">Kontak</span>
                            </a>
                            </a>
                            </a>

                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">

                    <?php 
                    
                        $this->load->view($namamodule .'/'.$namafileview);  
                        
                    ?>    
                    
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>assets/admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="<?php echo base_url() ?>assets/admin/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/feather.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/admin/js/custom.min.js"></script>
    <!-- Custom JavaScript Datatables -->
    <Script src="<?php echo base_url() ?>https://code.jquery.com/jquery-3.5.1.js"></Script>
    <Script src="<?php echo base_url() ?>https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></Script>
    <Script src="<?php echo base_url() ?>https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></Script>
    <Script src="<?php echo base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></Script>
    <Script src="<?php echo base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></Script>
    <Script src="<?php echo base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></Script>
    <Script src="<?php echo base_url() ?>https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></Script>
    <Script src="<?php echo base_url() ?>https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></Script>
    <script src="<?php echo base_url() ?>assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/pages/datatable/datatable-basic.init.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url() ?>assets/admin/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>
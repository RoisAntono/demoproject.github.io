<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SMK Negeri 1 Gending Probolinggo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/user/img/logo.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/user/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/user/css/style.css" rel="stylesheet">
</head>

<body>
    <?php 
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
        $menu = $uri_segments[2];
    ?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(0335) 4492684</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://web.facebook.com/Smkn-1-Gending-Kab-Probolinggo-198973453465810/?_rdc=1&_rdr"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <img class="m-0" style="width: 180px;" src="assets/user/img/logo gending 2.png" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">

                    <a class="nav-item nav-link <?php if($this->uri->segment(1)=="u_home"){echo "active";}?>" href="<?=base_url('u_home')?>" >
                        Home
                    </a>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($this->uri->segment(1)=="u_sejarah"){echo "active";} 
                        else if($this->uri->segment(1)=="u_visimisi"){echo "active";}
                        else if($this->uri->segment(1)=="u_kepsek"){echo "active";}
                        else if($this->uri->segment(1)=="u_guru"){echo "active";}
                        ?>" data-bs-toggle="dropdown" href="#" >
                            Profil
                        </a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_sejarah"){echo "active";}?>" href="<?=base_url('u_sejarah')?>" >
                                Sejarah
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_visimisi"){echo "active";}?>" href="<?=base_url('u_visimisi')?>" >
                                Visi dan Misi
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_kepsek"){echo "active";}?>" href="<?=base_url('u_kepsek')?>" >
                                Kepala Sekolah
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_guru"){echo "active";}?>" href="<?=base_url('u_guru')?>" >
                                Data Guru & Karyawan
                            </a>
                        </div>
                    </div>

                    <a class="nav-item nav-link <?php if($this->uri->segment(1)=="u_karyasiswa"){echo "active";}?>" href="<?=base_url('u_karyasiswa')?>" >
                        Karya Siswa
                    </a>


                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($this->uri->segment(1)=="u_jurusan"){echo "active";}
                        ?>" data-bs-toggle="dropdown" href="#" >
                            Program Keahlian
                        </a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_jurusan"){echo "active";}?>" href="<?=base_url('u_jurusan')?>" >
                                Jurusan 1
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_jurusan"){echo "active";}?>" href="<?=base_url('u_jurusan')?>" >
                                Jurusan 2
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_jurusan"){echo "active";}?>" href="<?=base_url('u_jurusan')?>" >
                                Jurusan 3
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($this->uri->segment(1)=="u_osis"){echo "active";} 
                        else if($this->uri->segment(1)=="u_ekskul"){echo "active";}
                        else if($this->uri->segment(1)=="u_prestasi"){echo "active";}
                        ?>" data-bs-toggle="dropdown" href="#" >
                            Kesiswaan
                        </a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_osis"){echo "active";}?>" href="<?=base_url('u_osis')?>" >
                                OSIS
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_ekskul"){echo "active";}?>" href="<?=base_url('u_ekskul')?>" >
                                Ekstra Kulikuler
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_prestasi"){echo "active";}?>" href="<?=base_url('u_prestasi')?>" >
                                Prestasi Siswa
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($this->uri->segment(1)=="u_denah"){echo "active";} 
                        else if($this->uri->segment(1)=="u_fasilitas"){echo "active";}
                        ?>" data-bs-toggle="dropdown" href="#" >
                            Sarana dan Prasarana
                        </a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_denah"){echo "active";}?>" href="<?=base_url('u_denah')?>" >
                                Denah Sekolah
                            </a>
                            <a class="dropdown-item <?php if($this->uri->segment(1)=="u_fasilitas"){echo "active";}?>" href="<?=base_url('u_fasilitas')?>" >
                                Fasilitas
                            </a>
                        </div>
                    </div>
                    <a class="nav-item nav-link <?php if($this->uri->segment(1)=="u_contact"){echo "active";}?>" href="<?=base_url('u_contact')?>" >
                        Kontak
                    </a>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5" style="margin-bottom: 50px; background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(assets/user/img/Screenshot_92.jpg) center center no-repeat;
    background-size: cover; ">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h2 class="display-4 text-white animated zoomIn">SMK NEGERI 1 GENDING</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Blog Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
                <?php 
                    $this->load->view($namamodule .'/'.$namafileview);  
                ?> 
        </div>
    </div>
    <!-- Blog Start -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <img class="m-0" style="width: 180px;" src="assets/user/img/logo gending 3.png" alt="Image">
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Berlangganan </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Informasi</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Jl. Sumberkerang, Sumberan, Randupitu, Kec. Gending, Kabupaten Probolinggo, Jawa Timur 67272</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Jurusan</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Jurusan 1</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Jurusan 1</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Jurusan 1</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Jurusan 1</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="https://www.smkn1gending.sch.id/">SMK Negeri 1 Gending</a>. All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">Hummasoft</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/user/lib/wow/wow.min.js"></script>
    <script src="assets/user/lib/easing/easing.min.js"></script>
    <script src="assets/user/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/user/lib/counterup/counterup.min.js"></script>
    <script src="assets/user/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/user/js/main.js"></script>
</body>

</html>
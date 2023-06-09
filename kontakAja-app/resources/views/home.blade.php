<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KontakAja! adalah aplikasi kontak yang memudahkan gaya hidup Anda.">
    <meta name="dicoding:email" content="reydylanza@gmail.com">
    <title>KontakAja! - Connect Easily, Going Fastly</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #c1c1c1;
            color: white;
            cursor: pointer;
            padding: 13px;
            border-radius: 50px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
</head>

<body class="cornflower-blue">
    <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <br>
            <img src="{{ asset('assets/img/logo-scroll.svg') }}" class="logo" alt="Logo">
        </div>
    </div>
    <header id="home">
        <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">
            <div class="container-full">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-full">
                <div class="attr-nav extra-color">
                    @auth
                        <ul>
                            <li class="try-us"><a href="/dashboard">Dashboard</a></li>
                        </ul>
                    @else
                        <ul>
                            <li class="try-us"><a href="/login">Coba yuk!</a></li>
                        </ul>
                    @endauth
                </div>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/logo.svg') }}" class="logo logo-display" alt="Logo">
                    <img src="{{ asset('assets/img/logo-scroll.svg') }}" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Cara Kerja</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Hubungi Kami</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <div class="banner-area circle-shape text-center auto-height text-light heading-capitalized bg-gradient">
        <div class="shape-left-bottom">
            <img src="{{ asset('assets/img/shape/bg-3.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="content-box">
                <div class="row align-center">
                    <div class="col-lg-8 offset-lg-2 info">
                        <h2 class="wow fadeInDown" style="font-size: 30pt;" data-wow-duration="1s"><strong>Connect
                                Easily, Going Fastly</strong> With KontakAja!</h2>
                        @auth
                            <a class="btn circle btn-md btn-light effect wow fadeInUp" data-wow-duration="1.8s"
                                href="/dashboard">Menuju Dashboard</a>
                        @else
                            <a class="btn circle btn-md btn-light effect wow fadeInUp" data-wow-duration="1.8s"
                                href="/login">Coba Sekarang</a>
                        @endauth
                    </div>
                    <div class="col-lg-8 offset-lg-2 wow fadeInRight" data-wow-duration="1s">
                        <div class="thumb-innner">
                            <img src="{{ asset('assets/img/illustration/3.png') }}" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about-features-area about-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info wow fadeInLeft">
                    <h5>Tentang Kami</h5>
                    <h2><strong>KontakAja!</strong></h2>
                    <p>
                        KontakAja! adalah sebuah aplikasi yang menyediakan solusi lengkap untuk mengatur kontak dan
                        aktivitas harian Anda. Dengan fitur todo list yang praktis, kami membantu Anda merencanakan dan
                        mengelola tugas-tugas dengan mudah.Dengan KontakAja!, Anda dapat mengoptimalkan waktu dan energi
                        Anda dalam mengatur kontak serta menyelesaikan tugas-tugas penting dengan lebih efektif.
                        KontakAja! adalah teman setia Anda dalam menjaga kontak dan meningkatkan produktivitas.
                    </p>
                </div>
                <div class="col-lg-6 process-box text-center">
                    <div class="row">
                        <div class="item-grid col-lg-6 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-address-book"></i>
                                </div>
                                <h4>Kontak</h4>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <h4>Todo</h4>
                            </div>
                        </div>
                        <div class="item-grid col-lg-6 col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h4>Keamanan</h4>
                            </div>
                            <div class="item wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-list-alt"></i>
                                </div>
                                <h4>Alamat</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="services-area carousel-shadow default-padding-bottom">
        <div class="shape-left-bottom shape opacity-default">
            <img src="{{ asset('assets/img/shape/4.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Apa yang bisa kami lakukan</h5>
                        <h2>Mari Check Solusi Address<br>Book Kami</h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-lg">
            <div class="services-items wow fadeInUp services-stage-carousel owl-carousel owl-theme text-center">
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Mengelola Daftar Kontak</a>
                        </h4>
                        <p>Menyediakan platform untuk menyimpan dan mengatur kontak penting dengan mudah.</p>
                        <a href="#"><i class="fas fa-arrow-right"></i> Selengkapnya</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="flaticon-keyword-1"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#"> Melakukan Pencarian Cepat</a>
                        </h4>
                        <p>Menemukan kontak atau tugas dengan cepat berdasarkan nama, kategori atau kata kunci.</p>
                        <a href="#"><i class="fas fa-arrow-right"></i>Selengkapnya</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Mengatur Tugas dan Aktivitas</a>
                        </h4>
                        <p>Bisa untuk membuat daftar tugas, atur tanggal tugas dan tandai yang sudah selesai.</p>
                        <a href="#"><i class="fas fa-arrow-right"></i>Selengkapnya</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Kemananan dan privasi terjaga</a>
                        </h4>
                        <p>Enkripsi data, izin akses terkontrol, dan perlindungan informasi penting.</p>
                        <a href="#"><i class="fas fa-arrow-right"></i>Selengkapnya</a>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <i class="fas fa-map-marked"></i>
                    </div>
                    <div class="info">
                        <h4>
                            <a href="#">Integrasi Maps <br> API</a>
                        </h4>
                        <p>Menampilkan lokasi kontak dengan peta interaktif dalam Web aplikasi yang responsif. </p>
                        <a href="#"><i class="fas fa-arrow-right"></i>Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-area default-padding-bottom">
        <div class="container">
            <div class="faq-items">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="faq-content wow fadeInUp">
                            <h2>KontakAja! membangun solusi praktis <strong>untuk pengelolaan kontak dan tugas harian
                                    Anda.</strong></h2>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="mb-0" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Apa keunggulan KontakAja! dibandingkan dengan aplikasi sejenis?
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                KontakAja! menawarkan pengelolaan kontak dan todo list dalam satu
                                                aplikasi yang praktis, memungkinkan Anda mengatur kontak dan
                                                menyelesaikan tugas-tugas dengan efisien dalam satu tempat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Apakah data kontak dan tugas-tugas saya aman di KontakAja!?
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Keamanan data Anda adalah prioritas kami. KontakAja! menggunakan
                                                enkripsi yang kuat dan tidak akan memberikan akses atau mengungkapkan
                                                data Anda kepada pihak ketiga tanpa izin Anda.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Bisakah saya mengakses KontakAja! dari perangkat lain?
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p>
                                                Ya, KontakAja! dapat diakses dari berbagai perangkat. Data kontak dan
                                                tugas-tugas Anda akan secara otomatis disinkronkan di semua perangkat
                                                yang terhubung ke akun Anda, memberikan fleksibilitas dalam pengelolaan
                                                informasi Anda di mana pun Anda berada.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="thumb wow fadeInLeft" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/img/illustration/17.png') }}" alt="Thumb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="team" class="team-area bg-gray default-padding bottom-less">
        <div class="shape-top">
            <img src="{{ asset('assets/img/shape/10.png') }}" alt="Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Tim Kami</h5>
                        <h2>
                            Berkenalan dengan <br>anggota tim kami
                        </h2>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
            <div class="team-items text-center">
                <div class="row">
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="500ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/afrizal.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <span>Dashboard Engineer</span>
                                <h4>Afrizal Adiestya Putra</h4>
                                <div class="contact">
                                    <i class="fab fa-linkedin"></i>
                                    <a href="https://www.linkedin.com/in/afrizal-adiestya-putra-55667522a/">Afrizal
                                        Adiestya Putra</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="600ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/anggoro.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <span>Back-End Developer</span>
                                <h4>Anggoro Rizki A.</h4>
                                <div class="contact">
                                    <i class="fab fa-linkedin"></i>
                                    <a href="https://www.linkedin.com/in/anggoro-rizki-aprillianto-b29b66254/">Anggoro
                                        Rizki Aprillianto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="700ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/rey.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <span>Front-End Developer</span>
                                <h4>Rey Dylanza</h4>
                                <div class="contact">
                                    <i class="fab fa-linkedin"></i>
                                    <a href="https://www.linkedin.com/in/rey-dylanza-208302270">Rey Dylanza</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="800ms">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/CallistaAudi.png') }}" alt="Thumb">
                            </div>
                            <div class="info">
                                <span>UI/UX</span>
                                <h4>Callista Audi Devras</h4>
                                <div class="contact">
                                    <i class="fab fa-linkedin"></i>
                                    <a href="https://www.linkedin.com/in/callista-audi/">Callista Audi Devras</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="default-padding"></div>
    <div id="contact" class="contact-us-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 address text-light">
                    <div class="address-items wow fadeInUp">
                        <div class="item">
                            <h4>Office Location</h4>
                            <div class="info">
                                <p>Dicoding Space,<br> Bandung, Jawa Barat<br> Indonesia</p>
                            </div>
                        </div>
                        <div class="item">
                            <h4>Contact Info</h4>
                            <div class="info">
                                <ul>
                                    <li>Phone: <span>(+62) 816-238-252</span></li>
                                    <li>Email: <span>mykontakaja@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 contact-form wow fadeInLeft">
                    <h2>Ada pertanyaan? <strong>Mari bertanya kepada kami dibawah ini</strong></h2>
                    <form action="https://formsubmit.io/send/mykontakaja@gmail.com" method="POST"
                        class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nama"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*"
                                        type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="No.HP"
                                        type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Jelaskan pertanyaan Anda *"></textarea>
                                </div>
                            </div>
                            <input name="_formsubmit_id" type="text" style="display:none">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit">
                                    Kirim pesan <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <footer class="bg-dark text-light">
        <div class="svg-shape">
            <svg xmlns="http://www.w3.org/2000/svg" class="light" preserveAspectRatio="none" viewBox="0 0 1070 52">
                <path d="M0,0S247,91,505,32c261.17-59.72,565-13,565-13V0Z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>mykontakaja@gmail.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>(+62) 816-238-252</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Project</h4>
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#about">Tentang</a></li>
                                <li><a href="#services">Cara Kerja</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#contact">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Useful Link</h4>
                            <ul>
                                <li><a href="https://www.dicoding.com/">Dicoding Indonesia</a></li>
                                <li><a href="https://kampusmerdeka.kemdikbud.go.id/">Kampus Merdeka</a></li>
                                <li><a href="https://www.kemdikbud.go.id/">Kemendikbud</a></li>
                                <li><a href="https://www.instagram.com/dicoding/">Instagram Dicoding</a></li>
                                <li><a href="https://www.instagram.com/kampusmerdeka.ri/">Instagram Kampus Merdeka</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Support</h4>
                            <ul>
                                <li><a href="https://drive.google.com/file/d/1pbKitugDZYpscppZ9PNQf7weFmEqvN8x/view?usp=sharing">Manual Guide Book</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script> KontakAja! Indonesia | All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><em class="fa fa-chevron-up"
            aria-hidden="true"></em></button>
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/equal-height.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/progresscircle.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        let mybutton = document.getElementById("myBtn");

        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>

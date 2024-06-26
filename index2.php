<?php 
    session_start();
    require "function/functions.php";
    
    if ( isset($_SESSION["login"]) ) {
        header("Location: dashboard");
        exit;
    } elseif(isset($_COOKIE['login'])) {
        header("Location: dashboard");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/money.png">
    <title>Money Me</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <style>
        .parallax {
            /* background: url(img/bg3.jpg); */
            background-attachment: fixed;
            /* background-size: cover; */
            background-repeat: no-repeat;
            background-color: #8d918d;
        }   

        .parallax2 {
            /* background: url(img/team.jpg); */
            background-attachment: fixed;
            background-repeat: no-repeat;
            /* background-size: cover; */
            background-color: #95b9c7;
        }
    </style>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top main-nav" id="mainNav">
        <div class="container">
            <a class="js-scroll-trigger" href="#page-top">
                <img src="img/money.png" width="50px" style="margin-right: 10px; margin-bottom: 2px;">
            </a>
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Money Me</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!-- header -->
    <header id="home" class="text-light parallax">
        <div class="container konten">
            <h1 style="font-size: 36pt;">Selamat Datang di Money Me</h1>
            <p class="lead" style="font-size: 16pt;">Aplikasi website Money Me adalah aplikasi pengelolaan management suatu keuangan dengan baik dan benar</p>
            <a href="login" class="btn btn-outline-light button">Get Started</a>
        </div>
    </header>
    <!-- header -->

    <!-- features -->
    <section id="features" class="bg-light">
        <div class=" container konten2">
            <div class="garis text-center">FEATURES</div>

            <div class="col-lg-12 foot-fitur">
                <h4 class="headline text-center">Money Me</h4>
                <p class="isi-fitur text-center">Money Me adalah sebuah aplikasi web yang dirancang khusus untuk membantu pengguna dalam mencatat dan melacak pengeluaran serta pemasukan mereka setiap hari. Aplikasi ini memiliki sejumlah fitur menarik yang memudahkan pengguna untuk memonitor keuangan mereka secara efektif. Dikhususkan untuk remaja yang mungkin mengalami kesulitan dalam mengelola uang mereka dengan baik, Money Me menjadi solusi yang tepat untuk membantu mereka mengontrol dan mengatur keuangan mereka dengan lebih baik. Dengan Money Me, pengguna dapat dengan mudah mencatat setiap transaksi harian mereka, menganalisis pola pengeluaran, menetapkan anggaran, serta mengidentifikasi area di mana mereka dapat menghemat dan mengelola uang dengan lebih bijaksana. </p>
            </div>

        </div>
    </section>
    <!-- features -->

    <!-- about us -->
    <section id="about" class=" parallax2">
        <div class="container">
            <div style="color: white;" class="garis garis3 text-center">About Us</div>
            <!-- <div class="row text-center">
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/catat.png" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Mencatat Keuangan</h3>
                            <p>Pencatatan keuangan ini mempermudah untuk melakukan evaluasi dalam mengatur keuangan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/prioritas.png" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Prioritas Kebutuhan</h3>
                            <p>Dengan memprioritaskan kebutuhan, harapannya pengeluaran keuangan bisa ditekan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team">
                        <div class="gbr">
                            <div class="box">
                                <img class="img" src="profile/menabung.png" width="100%">
                            </div>
                        </div>
                        <div class="teks">
                            <h3 class="job-desk">Menabung</h3>
                            <p>Bertujuan untuk memenuhi kebutuhan di waktu yang akan datang serta menyiapkan dana saat ada kejadian tak terduga.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- about us -->

    <!-- Footer -->
    <div class="py-3 parallax">
        <div class="container text-light">
            <div class="row">
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Main</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="#home" class="js-scroll-trigger foot-link">Home</a> </li>
                        <li> <a href="#features" class="js-scroll-trigger foot-link">Features</a> </li>
                        <li> <a href="#about" class="js-scroll-trigger foot-link">About Us</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 p-3">
                    <h5> <b>Others</b> </h5>
                    <ul class="list-unstyled">
                        <li> <a href="faq" class="foot-link">FAQ</a> </li>
                        <li> <a href="#" class="foot-link">Promotion Videos</a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>About</b> </h5>
                    <p class="mb-0">Website Aplikasi Money Me dilengkapi dengan fitur menarik yang dapat mempermudah user mengelola keuangannya.</p>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <h5> <b>Follow us</b> </h5>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between my-2">
                            <a href="https://www.facebook.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-facebook-official warna-icon fa-lg mr-2"></i>
                            </a>
                            <a href="https://www.instagram.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-instagram warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://plus.google.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-google-plus-official warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://www.pinterest.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-pinterest-p warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://www.reddit.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-reddit warna-icon fa-lg mx-2"></i>
                            </a>
                            <a href="https://twitter.com" class="foot-link" target="_blank">
                                <i class="d-block fa fa-twitter warna-icon fa-lg ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 mt-2">Kelompok 9</p> 
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <!-- js utama -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>

    <!-- js scrolling -->
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
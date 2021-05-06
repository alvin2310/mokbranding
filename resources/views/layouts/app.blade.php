<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>
    <header id="header" class="fixed-top ">
        <div class="container-fluid">
    
          <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
              <h1 class="logo me-auto me-lg-0"><a href="index.html">Digitalize</a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
              <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#services">Services</a></li>
                  <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                  <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav>
              <!-- .navbar -->
            </div>
          </div>
    
        </div>
      </header>

      @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Digitalize</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>Digitalize</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

        <!-- Vendor JS Files -->
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
        <script src="{{asset('vendor/purecounter/purecounter.js')}}"></script>
        <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{asset('js/main.js')}}"></script>
    
</body>
</html>
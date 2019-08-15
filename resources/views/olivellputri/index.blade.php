<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/honey/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/vendors/animate-css/animate.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('/honey/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/honey/css/responsive.css')}}">
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <audio id="musik" src="{{asset('/musik.mp3')}}" loop autoplay muted></audio>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{asset('/honey/img/logo.png')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a><i id="btn-musik" class="fas fa-music fa-5x"></i></a></li>
                            <li class="nav-item"><a id="home" class="nav-link">Home</a></li>
                            <li class="nav-item"><a id="mempelai" class="nav-link">Mempelai </a></li>
                            <li class="nav-item"><a id="acara" class="nav-link">Acara</a></li>
                            <li class="nav-item"><a id="galeri" class="nav-link">Galeri</a></li>
                            <li class="nav-item"><a id="lokasi" class="nav-link">Lokasi</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <div class="badan">
    </div>

    <!--================Footer Area =================-->
    <footer class="footer_area">
        <div class="footer_inner p_50">
            <img src="{{asset('/honey/img/footer-logo.png')}}" alt="">
            <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </footer>
    <!--================End Footer Area =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a4ed702092.js"></script>
    <script src="{{asset('/honey/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/honey/js/popper.js')}}"></script>
    <script src="{{asset('/honey/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/honey/js/stellar.js')}}"></script>
    <script src="{{asset('/honey/vendors/lightbox/simpleLightbox.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('/honey/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/honey/vendors/flipclock/timer.js')}}"></script>
    <script src="{{asset('/honey/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('/honey/js/mail-script.js')}}"></script>
    <script src="{{asset('/honey/js/theme.js')}}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC5rIe8cvjzlPetRb87jaLFlLWvPj92r1Q"></script>
    <script>
        (function() {
            $('.nav-link').click(function() {
                var menu = $(this).attr('id');
                if (menu == 'home') {
                    $('.badan').load('home');
                } else if (menu == 'mempelai') {
                    $('.badan').load('mempelai');
                } else if (menu == 'acara') {
                    $('.badan').load('acara');
                } else if (menu == 'galeri') {
                    $('.badan').load('galeri');
                } else if (menu == 'lokasi') {
                    $('.badan').load('lokasi');
                }
            });

            $('.badan').load('home');

            var countDownDate = new Date("Dec 11, 2019 00:00:00").getTime();
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("hari").innerHTML = days;
                document.getElementById("jam").innerHTML = hours;
                document.getElementById("menit").innerHTML = minutes;
                document.getElementById("detik").innerHTML = seconds;
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("hari").innerHTML = "00";
                    document.getElementById("jam").innerHTML = "00";
                    document.getElementById("menit").innerHTML = "00";
                    document.getElementById("detik").innerHTML = "00";
                }
            }, 1000);

            $('#btn-musik').click(function() {
                var mus = document.getElementById("musik");
                if (mus.muted == true) {
                    mus.muted = false;
                } else {
                    mus.muted = true;
                }
            });
        }())
    </script>
</body>

</html>
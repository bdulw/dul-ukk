<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Garden Cafe</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/templatemo-klassy-cafe.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/lightbox.css') }}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader" style="background-color: chocolate">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="template/images/Logo.png" width="100">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang</a></li>                          
                            <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                            {{-- <li class="scroll-to-section"><a href="{{ route('register') }}">regis</a></li> --}}
                        </ul>        
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content" style="background-image: url(../template/images/bg-image.jpg)">
                        <div class="inner-content">
                            <h4 style="color: black"><b>GardenCafe</b></h4>
                            <h6 style="color: black"><b>THE BEST EXPERIENCE</b></h6>
                            <div class="main-white-button scroll-to-section" >
                                <a href="#about" style="color: chocolate">Selamat Datang !!!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="template/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="template/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="template/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Tentang Kami</h6>
                            <h2>Selamat Datang Di Website Garden Cafe</h2>
                        </div>
                        <p>Garden cafe is one of the best,<br>Sesuai namanya, cafe ini memberi kesejukan taman ditengah hiruk pikuk Kota Bogor. Zaman sekarang kalau buka cafe bukan hanya soal taste aja, desain interior juga harus ciamik, instagramable, fotogenik dan bisa buat mejeng cantik.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="template/images/about-thumb-01.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="template/images/about-thumb-02.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img src="template/images/about-thumb-03.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="template/images/about-video-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer style="background-color: chocolate">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="#"><img class="img-circle" src="template/images/Logo.png" width="110"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <br>
                        <b><p>Copyright © 2021-2022 Garden Cafe.</p></b>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('template/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('template/js/popper.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('template/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('template/js/accordions.js') }}"></script>
    <script src="{{ asset('template/js/datepicker.js') }}"></script>
    <script src="{{ asset('template/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('template/js/waypoints.min.js"') }}"></script>
    <script src="{{ asset('template/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('template/js/slick.js') }}"></script> 
    <script src="{{ asset('template/js/lightbox.js') }}"></script> 
    <script src="{{ asset('template/js/isotope.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ asset('template/js/custom.js') }}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>
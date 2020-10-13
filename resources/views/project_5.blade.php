<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CoolisCodes - Developer Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/cube-solid.svg')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  {{-- <link href="{{ asset('vendor/venobox/venobox.css')}}" rel="stylesheet"> --}}
  <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v2.3.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="{{ url('/welcome')}}">CoolisCodes</a>
      {{-- <a class="navbar-brand js-scroll" href="#page-top">
        <img src="{{ asset('img/cube-solid.svg')}}" style="width: 2rem; height: 2rem; margin-right: 1rem; margin-bottom: 0.2rem;">
        CoolisCodes</a> --}}
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="{{ url('/welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/welcome#about')}}">About</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/welcome#work')}}">Work</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link js-scroll" href="{{ url('/welcome#contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="intro intro-single route bg-image" style="background-image: url({{ asset('img/overlay-bg.jpg')}})">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Project 5</h2>
          {{-- <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="{{ url('welcome')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Portfolio Details</li>
          </ol> --}}
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          {{-- <div class="owl-carousel portfolio-details-carousel">
            <img src="{{ asset('img/portfolio-details-1.jpg')}}" class="img-fluid" alt="">
            <img src="{{ asset('img/portfolio-details-2.jpg')}}" class="img-fluid" alt="">
            <img src="{{ asset('img/portfolio-details-3.jpg')}}" class="img-fluid" alt="">
          </div> --}}

          <div class="project-video-section">
            <video
              id="my-video"
              class="video-js vjs-big-play-centered vjs-16-9"
              controls
              preload="auto"
              width="640"
              height="264"
              poster="{{ asset('img/16-9_img.jpg')}}"
              data-setup="{}"
            >
              <source src="{{ asset('videos/video_1.mp4')}}" type="video/mp4" />
              {{-- <source src="MY_VIDEO.webm" type="video/webm" /> --}}
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="https://videojs.com/html5-video-support/" target="_blank"
                  >supports HTML5 video</a
                >
              </p>
            </video>

            <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
          </div>

          {{-- <div class="portfolio-info" id="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>
          </div> --}}

        </div>

        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            {{-- <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p> --}}
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('vendor/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{ asset('vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>
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
      <a class="navbar-brand js-scroll" href="{{ url('welcome')}}">
        <img src="{{ asset('img/cube-solid.svg')}}" style="width: 2rem; height: 2rem; margin-right: 1rem; margin-bottom: 0.2rem;">
        CoolisCodes</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= Intro Section ======= -->
   <div id="home" class="intro route bg-image" {{--style="background-image: url({{ asset('img/intro-bg.jpg')}})"--}}> 
    <div id="particles-js">
      
    </div>
    <div class="overlay-intro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Hello, I am Kyriakos Triantafyllidis</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Software Engineer,Game Developer</span><strong class="text-slider"></strong></p>
           <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#work" role="button">View My Work</a></p>
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{ asset('img/Coolis.jpg')}}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Kyriakos Triantafyllidis</span></p>
                        <p><span class="title-s">Profile: </span> <span>Software Engineer / Game Developer</span></p>
                        {{-- <p><span class="title-s">Email: </span> <span>contact@example.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>(617) 557-0089</span></p> --}}
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skills</p>
                    <span>C#</span> <span class="pull-right">80%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Unity 3D</span> <span class="pull-right">90%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>VR</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>AR</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Code Patterns</span> <span class="pull-right">65%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Git</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Arduino</span> <span class="pull-right">40%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                      Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
                      imperdiet et, porttitor
                      at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                      porttitor accumsan tincidunt.
                    </p>
                    <p class="lead">
                      Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                      porttitor volutpat. Vestibulum
                      ac diam sit amet quam vehicula elementum sed sit amet dui. porttitor at sem.
                    </p>
                    <p class="lead">
                      Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                      Nulla porttitor accumsan
                      tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    {{-- <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-camera"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Photography</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    {{-- <div class="section-counter paralax-mf bg-image" style="background-image: url({{ asset('img/counters-bg.jpg')}}">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">450</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">550</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">36</p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Work
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        
        {{-- <body>
          <video
            id="my-video"
            class="video-js"
            controls
            preload="auto"
            width="1280"
            height="720"
            poster="MY_VIDEO_POSTER.jpg"
            data-setup="{}"
          >
            <source src="{{ asset('videos/video_1.mp4')}}" type="video/mp4" />
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank"
                >supports HTML5 video</a
              >
            </p>
          </video> --}}

        <div class="row">

          
          <div class="col-md-4">
            <div class="work-box">
              {{-- <a data-gall="portfolioGallery" class="venobox"> --}}
              <a href="{{ url('project_1')}}">
                <div class="work-img">
                  {{-- <img src="{{ asset('img/work-1.jpg')}}" alt="" class="img-fluid"> --}}
                  <video
                    id="my-video"
                    class="video-js vjs-big-play-centered vjs-16-9"
                    {{-- controls --}}
                    preload="auto"
                    width="350"
                    height="220"
                    poster="{{ asset('img/video_thumbnail_1.png')}}"
                    data-setup="{}"
                  >
                  </video>
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">XR Active Learning </h2>
                    <div class="w-more">
                      <span class="w-ctegory">Unity, VR, C#</span> {{-- / <span class="w-date">18 Sep. 2018</span> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ url('project_1')}}"> <span class="ion-ios-more-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {{-- </a> --}}
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ url('project_2')}}">
                <div class="work-img">
                  {{-- <img src="{{ asset('img/work-2.jpg')}}" alt="" class="img-fluid"> --}}
                  <video
                    id="my-video"
                    class="video-js vjs-big-play-centered vjs-16-9"
                    {{-- controls --}}
                    preload="auto"
                    width="350"
                    height="220"
                    poster="{{ asset('img/video_thumbnail_2.png')}}"
                    data-setup="{}"
                  >
                  </video>
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Civil Protection</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Unity, VR, C#</span> {{-- / <span class="w-date">18 Sep. 2018</span> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ url('project_2')}}"> <span class="ion-ios-more-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ url('project_3')}}">
                <div class="work-img">
                  {{-- <img src="{{ asset('img/work-3.jpg')}}" alt="" class="img-fluid"> --}}
                  <video
                    id="my-video"
                    class="video-js vjs-big-play-centered vjs-16-9"
                    {{-- controls --}}
                    preload="auto"
                    width="350"
                    height="220"
                    poster="{{ asset('img/rickroll.gif')}}"
                    data-setup="{}"
                  >
                  </video>
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mavrito Lana Dere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> {{-- / <span class="w-date">18 Sep. 2018</span> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ url('project_3')}}"> <span class="ion-ios-more-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ url('project_4')}}">
                <div class="work-img">
                  {{-- <img src="{{ asset('img/work-4.jpg')}}" alt="" class="img-fluid"> --}}
                  <video
                    id="my-video"
                    class="video-js vjs-big-play-centered vjs-16-9"
                    {{-- controls --}}
                    preload="auto"
                    width="350"
                    height="220"
                    poster="{{ asset('img/rickroll.gif')}}"
                    data-setup="{}"
                  >
                  </video>
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bindo Laro Cado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> {{-- / <span class="w-date">18 Sep. 2018</span> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ url('project_4')}}"> <span class="ion-ios-more-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ url('project_5')}}">
                <div class="work-img">
                  {{-- <img src="{{ asset('img/work-5.jpg')}}" alt="" class="img-fluid"> --}}
                  <video
                    id="my-video"
                    class="video-js vjs-big-play-centered vjs-16-9"
                    {{-- controls --}}
                    preload="auto"
                    width="350"
                    height="220"
                    poster="{{ asset('img/rickroll.gif')}}"
                    data-setup="{}"
                  >
                  </video>
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Lena Mado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> {{-- / <span class="w-date">18 Sep. 2018</span> --}}
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ url('project_5')}}"> <span class="ion-ios-more-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{ url('project_6')}}">
                <div class="work-img">
                  {{-- <img src="{{ asset('img/work-6.jpg')}}" alt="" class="img-fluid"> --}}
                  <video
                    id="my-video"
                    class="video-js vjs-big-play-centered vjs-16-9"
                    {{-- controls --}}
                    preload="auto"
                    width="350"
                    height="220"
                    poster="{{ asset('img/rickroll.gif')}}"
                    data-setup="{}"
                  >
                  </video>
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="{{ url('project_6')}}"> <span class="ion-ios-more-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        -->

        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="{{ asset('img/testimonial-2.jpg')}}" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Xavi Alonso</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="{{ asset('img/testimonial-4.jpg')}}" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Marta Socrate</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    {{-- <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Blog
              </h3>
              <p class="subtitle-a">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="{{ url('blog-single')}}"><img src="{{ asset('img/post-1.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Travel</h6>
                  </div>
                </div>
              <h3 class="card-title"><a href="{{ url('blog-single')}}">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{ asset('img/testimonial-2.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="{{url('blog-single')}}"><img src="{{ asset('img/post-2.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
              <h3 class="card-title"><a href="{{url('blog-single')}}">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{ asset('img/testimonial-2.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="{{ url('blog-single')}}"><img src="{{ asset('img/post-3.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
              <h3 class="card-title"><a href="{{ url('blog-single')}}">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="{{ asset('img/testimonial-2.jpg')}}" alt="" class="avatar rounded-circle">
                    <span class="author">Morgan Freeman</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="ion-ios-clock-outline"></span> 10 min
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{ asset('img/overlay-bg.jpg')}})">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Me A Message
                      </h5>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert_message" id="success_message">
                        <p>{{$message}}</p>
                    </div>
                    @endif
                    <div>
                      <form action="{{url('/welcome')}}" method="POST" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                              {{-- <div class="validate"></div> --}}
                                @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                              {{-- <div class="validate"></div> --}}
                                @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                              {{-- <div class="validate"></div> --}}
                                @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                              {{-- <div class="validate"></div> --}}
                                @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Find Me
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                        Whether you want to get in touch, talk about a project collaboration, or just say hi, I'd love to hear from you. Simply fill out the form and send me a message !
                      </p>
                       <ul class="list-ico">
                        {{--<li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                        <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>--}}
                        <li><span class="ion-email"></span> contact@example.com</li>
                      </ul> 
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="#"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href="#"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                        <li><a href="#"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

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
  {{-- <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script> --}}
  <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('vendor/counterup/jquery.counterup.min.js')}}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('vendor/typed.js/typed.min.js')}}"></script>
  {{-- <script src="{{ asset('vendor/venobox/venobox.min.js')}}"></script> --}}
  <script src="{{ asset('vendor/particles/particles.js')}}"></script>
  <script src="{{ asset('vendor/particles/app.js')}}"></script>
  <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>

  <!-- Custom front end validation -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
  <script>
    $(function(){
        var $eventContForm = $(".php-email-form");
        if ($eventContForm.length > 0){
            $eventContForm.validate({
                
                rules: {                    

                    name: {
                        required: true,
                        minlength: 5,
                        maxlength: 50,
                    },
                    
                    email: {
                        required: true,
                        email: true,
                    },

                    subject: {
                        required: true,
                        minlength: 5,
                        maxlength: 150,
                    },
                    
                    message: {
                        required: true,
                        minlength: 5,
                        maxlength: 250,
                    },

                },

                messages: {

                    name: {
                        required: "Please fill your Name"                        
                    },

                    email: {
                        required: "Please fill your Email"
                    },

                    subject: {
                        required: "Please write a Subject"
                    },

                    message: {
                        required: "Please write your Message"
                    },

                  }
            })
        }
    });
</script>
  
</body>

</html>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kejaksaan Tinggi Sulawesi Tenggara</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo/kejaksaanri.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Combined Styles -->
  <style>
    .slider-content {
      text-align: center;
      position: relative;
    }

    .layer-1-3 {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .layer-1-3 img {
      width: 150px;
      height: auto;
      position: relative;
      animation: slideUpAndStay 2s ease-out forwards;
      opacity: 0;
    }

    @keyframes slideUpAndStay {
      0% {
        transform: translateY(50px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    /* Custom Dropdown Styles */
    .dropdown-menu {
      background-color: #ffffff; /* Background color for the dropdown */
      border: 1px solid #ccc; /* Optional: Add a border */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for depth */
    }

    .dropdown-menu a {
      color: #333; /* Text color for dropdown items */
      padding: 10px 15px; /* Add padding for better spacing */
    }

    .dropdown-menu a:hover {
      background-color: #007bff; /* Change to a blue background on hover */
      color: #ffffff; /* Change text color to white on hover */
    }

    /* Pastikan logo tetap di tengah */
    .slider-direction {
      position: relative;
    }

    .title2 {
      margin-bottom: 30px;
    }
  </style>

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="#" style="display: flex; align-items: center; margin-left: 0; padding-left: 0;">
                    <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Kejaksaan RI Logo" title="Kejaksaan RI" style="max-height: 50px; margin-right: 10px;">
                    <span style="color: white; font-size: 16px; line-height: 1.2;">
                        <strong>Kejaksaan Tinggi</strong><br>
                        Sulawesi Tenggara
                    </span>
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right" style="color: white;">
                  <li class="active">
                    <a class="page-scroll" href="#home" style="color: white;">Beranda</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">Profil <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#" style="color: white;">Tentang Kamu</a></li>
                      <li><a href="#" style="color: white;">Visi Misi</a></li>
                      <li><a href="#" style="color: white;">Struktur Organisasi</a></li>
                      <li><a href="#" style="color: white;">Tri Krama Adhyaksa</a></li>
                    </ul> 
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">Layanan <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#" style="color: white;">Cek Perkara</a></li>
                      <li><a href="#" style="color: white;">Buku Tamu</a></li>
                      <li><a href="#" style="color: white;">E-Tilang</a></li>
                      <li><a href="#" style="color: white;">JDIH</a></li>
                      <li><a href="#" style="color: white;">E-Prawas</a></li>
                      <li><a href="#" style="color: white;">E-PPID</a></li>
                      <li><a href="#" style="color: white;">Reformasi Birokrasi</a></li>
                      <li><a href="#" style="color: white;">Sarana</a></li>
                    </ul> 
                  </li>
                  <li>
                    <a class="page-scroll" href="#blog" style="color: white;">Berita</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#survey" style="color: white;">Survey</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact" style="color: white;">Kontak</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/Slide1_agustus2024.jpeg" alt="" title="#slider-direction-1" />
        <img src="img/slider/Slide2_agustus2024.jpeg" alt="" title="#slider-direction-2" />
        <img src="img/slider/Slide3_agustus2024.jpeg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Selamat Datang di Website Resmi Kejaksaan Tinggi Sulawesi Tenggara</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Satya Adhi Wicaksana</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3">
                  <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Kejaksaan RI Logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Selamat Datang di Website Resmi Kejaksaan Tinggi Sulawesi Tenggara</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Satya Adhi Wicaksana</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3">
                  <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Kejaksaan RI Logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Selamat Datang di Website Resmi Kejaksaan Tinggi Sulawesi Tenggara</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Satya Adhi Wicaksana</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3">
                  <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Kejaksaan RI Logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About eBusiness</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
								  <img src="img/about/1.jpg" alt="">
								</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">project Maintenance</h4>
              </a>
              <p>
                Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Interior design Package
                </li>
                <li>
                  <i class="fa fa-check"></i> Building House
                </li>
                <li>
                  <i class="fa fa-check"></i> Reparing of Residentail Roof
                </li>
                <li>
                  <i class="fa fa-check"></i> Renovaion of Commercial Office
                </li>
                <li>
                  <i class="fa fa-check"></i> Make Quality Products
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>

  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Latest News</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="img/blog/1.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">13 comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="blog.html">Assumenda repud eum veniam</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Left Blog -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="img/blog/2.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">130 comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="blog.html">Explicabo magnam quibusdam.</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
            </div>
            <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <!-- Start Right Blog-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="img/blog/3.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#">10 comments</a>
									</span>
                <span class="date-type">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                                        <a href="blog.html">Lorem ipsum dolor sit amet</a>
									</h4>
                <p>
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
									<a href="blog.html" class="ready-btn">Read more</a>
								</span>
            </div>
          </div>
          <!-- End Right Blog-->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->
  <!-- Start Suscrive Area -->
  <div class="suscribe-area" style="background-color: #004d00;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3 style="color: white;">masukkan apa disini</h3>
            <a class="sus-btn" href="#" style="background-color: #006600; color: white;">dan disini</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +1 5589 55488 55<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: info@example.com<br>
                  <span>Web: www.example.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: A108 Adam Street<br>
                  <span>NY 535022, USA</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer style="background-color: #004d00;">
    <div class="footer-area" style="background-color: #004d00;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Kejaksaan RI Logo" style="width: 150px; height: auto;">
                  <h2 style="color: white;">Kejaksaan Tinggi Sulawesi Tenggara</h2>
                </div>

                <p style="color: white;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook" style="color: white;"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter" style="color: white;"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google" style="color: white;"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest" style="color: white;"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color: white;">information</h4>
                <p style="color: white;">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p style="color: white;"><span>Tel:</span> +123 456 789</p>
                  <p style="color: white;"><span>Email:</span> contact@example.com</p>
                  <p style="color: white;"><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color: white;">Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom" style="background-color: #002200;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center" style="color: white;">
              <p>
                &copy; Copyright <strong>KEJAKSAAN TINGGI SULAWESI TENGGARA</strong>. All Rights Reserved
              </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/venobox/venobox.min.js"></script>
  <script src="/lib/knob/jquery.knob.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/parallax/parallax.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="/lib/appear/jquery.appear.js"></script>
  <script src="/lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>

  <script src="/js/main.js"></script>
</body>

</html>

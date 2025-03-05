<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tri Krama Adhyaksa - Kejaksaan Tinggi Sulawesi Tenggara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/logo/kejaksaanri.png') }}" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <style>
        .krama-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,100,0,0.1);
            margin-bottom: 30px;
        }

        .krama-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0,100,0,0.2);
        }

        .krama-icon {
            color: #006400;
            margin-bottom: 20px;
        }

        .krama-card h3 {
            color: #006400;
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .krama-card p {
            color: #666;
            margin: 0;
        }

        .content-detail {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .content-title {
            color: #333;
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 40px;
            text-align: left;
        }

        .krama-section {
            margin-bottom: 40px;
            padding: 30px;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 5px solid #006400;
            transition: all 0.3s ease;
        }

        .krama-section:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .krama-section h3 {
            color: #006400;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .krama-section p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin: 0;
            text-align: justify;
        }

        .krama-section:last-child {
            margin-bottom: 0;
        }

        .section-headline {
            margin-bottom: 50px;
        }

        .section-headline h2 {
            display: inline-block;
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 70px;
            position: relative;
            text-transform: capitalize;
        }

        .section-headline h2::after {
            border: 1px solid #006400;
            bottom: -20px;
            content: "";
            left: 0;
            margin: 0 auto;
            position: absolute;
            right: 0;
            width: 40%;
        }

        .text-justify {
            text-align: justify;
            line-height: 1.8;
            color: #666;
            font-size: 16px;
        }

        .image-container {
            margin: 30px 0;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .back-to-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            display: none;
            background: #006400;
            color: #fff;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .back-to-top:hover {
            background: #004d00;
            color: #fff;
        }

        @media (max-width: 768px) {
            .content-detail {
                padding: 25px;
            }
            
            .krama-section {
                padding: 20px;
            }
            
            .content-title {
                font-size: 28px;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>

    <!-- header -->
    @include('layouts.header')

    <!-- Start About area -->
    <div id="about" class="about-area area-padding" style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>{{ $triKrama->title ?? 'Tri Krama Adhyaksa' }}</h2>
                    </div>
                </div>
            </div>

            <!-- Tri Krama Cards -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-4">
                    <div class="krama-card text-center mb-4">
                        <div class="krama-icon mb-3">
                            <i class="fa fa-balance-scale fa-3x"></i>
                        </div>
                        <h3>Satya</h3>
                        <p>Kesetiaan yang bersumber pada rasa jujur</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="krama-card text-center mb-4">
                        <div class="krama-icon mb-3">
                            <i class="fa fa-hand-peace-o fa-3x"></i>
                        </div>
                        <h3>Adhi</h3>
                        <p>Kesempurnaan dalam bertugas</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="krama-card text-center mb-4">
                        <div class="krama-icon mb-3">
                            <i class="fa fa-shield fa-3x"></i>
                        </div>
                        <h3>Wicaksana</h3>
                        <p>Bijaksana dalam tutur kata dan perilaku</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="well-middle">
                        <div class="single-well">
                            @if(isset($triKrama))
                                <div class="text-justify mb-4">
                                    {{ $triKrama->description }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if(isset($triKrama) && $triKrama->image)
                <div class="row justify-content-center mb-5">
                    <div class="col-md-8">
                        <div class="image-container text-center">
                            <img src="{{ asset('storage/' . $triKrama->image) }}" 
                                 alt="Tri Krama Image" 
                                 class="img-fluid rounded"
                                 style="max-height: 400px; width: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                        </div>
                    </div>
                </div>
            @endif

            <!-- Content Detail -->
            <div class="row">
                <div class="col-md-12">
                    <div class="content-detail">
                        <h2 class="content-title">Tri Krama Adhyaksa</h2>
                        
                        <div class="krama-section">
                            <h3>Satya</h3>
                            <p>Kesetian Yang bersumber pada rasa jujur, baik kepada Tuhan Yang Maha Esa, terhadap diri pribadi dan keluarga, maupun kepada sesama manusia</p>
                        </div>

                        <div class="krama-section">
                            <h3>Adhi</h3>
                            <p>Kesempurnaan dalam bertugas dan berunsur utama pada rasa tanggung jawab terhadap Tuhan Yang Maha Esa, keluarga dan sesama manusia.</p>
                        </div>

                        <div class="krama-section">
                            <h3>Wicaksana</h3>
                            <p>Bijaksana dalam tutur kata dan tingkah laku, khususnya dalam penerapan kekuasaan dan kewenangannya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About area -->

    <!-- Start Footer bottom Area -->
    @include('layouts.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('lib/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('lib/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });

        $('.back-to-top').click(function() {
            $('html, body').animate({scrollTop : 0}, 1500, 'easeInOutExpo');
            return false;
        });
    </script>
</body>
</html> 
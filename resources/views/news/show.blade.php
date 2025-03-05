<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $news->title }} - Kejaksaan Tinggi Sulawesi Tenggara</title>
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
        .news-detail {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .news-title {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .news-meta {
            color: #666;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .news-meta i {
            color: #006400;
            margin-right: 5px;
        }

        .news-thumbnail {
            margin-bottom: 30px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .news-thumbnail img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .news-content {
            font-size: 16px;
            line-height: 1.8;
            color: #444;
            text-align: justify;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background: #006400;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 30px;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background: #005000;
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .news-detail {
                padding: 20px;
            }

            .news-title {
                font-size: 24px;
            }

            .news-content {
                font-size: 15px;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- header -->
    @include('layouts.header')

    <!-- Start News Detail -->
    <div class="blog-page area-padding" style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="news-detail">
                        <h1 class="news-title">{{ $news->title }}</h1>
                        
                        <div class="news-meta">
                            <i class="fa fa-calendar"></i> 
                            {{ $news->created_at->format('d M, Y') }}
                        </div>

                        @if($news->thumbnail)
                            <div class="news-thumbnail">
                                <img src="{{ asset('storage/' . $news->thumbnail) }}" 
                                     alt="{{ $news->title }}">
                            </div>
                        @endif

                        <div class="news-content">
                            {!! $news->content !!}
                        </div>

                        <a href="{{ route('news.all') }}" class="back-button">
                            <i class="fa fa-arrow-left"></i> Kembali ke Daftar Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End News Detail -->

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
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html> 
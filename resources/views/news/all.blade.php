<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Berita - Kejaksaan Tinggi Sulawesi Tenggara</title>
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
        .blog-page {
            background: #f9f9f9;
            padding: 40px 0;
        }

        .single-blog {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .single-blog:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transform: translateY(-2px);
        }

        .single-blog-img {
            position: relative;
            overflow: hidden;
        }

        .single-blog-img img {
            transition: all 0.3s ease;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .single-blog:hover .single-blog-img img {
            transform: scale(1.05);
        }

        .blog-meta {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .date-type {
            font-size: 14px;
            color: #666;
        }

        .date-type i {
            margin-right: 5px;
            color: #006400;
        }

        .blog-text {
            padding: 15px;
        }

        .blog-text h4 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .blog-text h4 a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .blog-text h4 a:hover {
            color: #006400;
        }

        .blog-text p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .ready-btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 15px 15px;
            background: #006400;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .ready-btn:hover {
            background: #005000;
            color: #fff;
            text-decoration: none;
        }

        .section-headline {
            margin-bottom: 50px;
        }

        .section-headline h2 {
            color: #333;
            font-size: 32px;
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .section-headline h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: #006400;
        }

        /* Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .pagination > li > a,
        .pagination > li > span {
            color: #006400;
            border: 1px solid #006400;
            margin: 0 3px;
            padding: 8px 16px;
            transition: all 0.3s ease;
        }

        .pagination > .active > a,
        .pagination > .active > span {
            background-color: #006400;
            border-color: #006400;
            color: #fff;
        }

        .pagination > li > a:hover,
        .pagination > li > span:hover {
            color: #fff;
            background-color: #006400;
            border-color: #006400;
        }

        @media (max-width: 768px) {
            .blog-page {
                padding: 20px 0;
            }

            .single-blog {
                margin-bottom: 20px;
            }

            .section-headline h2 {
                font-size: 26px;
            }

            .blog-text h4 {
                font-size: 16px;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- header -->
    @include('layouts.header')

    <!-- Start Blog Page -->
    <div class="blog-page area-padding" style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Semua Berita</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(isset($allNews) && count($allNews) > 0)
                    @foreach($allNews as $news)
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <img src="{{ asset('storage/' . $news->thumbnail) }}" 
                                         alt="{{ $news->title }}"
                                         style="width: 100%; height: 200px; object-fit: cover;">
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        {{ $news->created_at->format('d M, Y') }}
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="{{ route('news.show', $news->id) }}">{{ $news->title }}</a>
                                    </h4>
                                    <p>{{ Str::limit($news->short_description, 100) }}</p>
                                </div>
                                <span>
                                    <a href="{{ route('news.show', $news->id) }}" class="ready-btn">Baca Selengkapnya</a>
                                </span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>Belum ada berita.</p>
                    </div>
                @endif
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 text-center">
                    {{ $allNews->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Page -->

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
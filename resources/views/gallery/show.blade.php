<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Galeri - Kejaksaan Tinggi Sulawesi Tenggara</title>
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
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- header -->
    @include('layouts.header')

    <!-- Start Gallery Area -->
    <div class="gallery-area area-padding" style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($galleries as $gallery)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <a href="{{ asset('storage/' . $gallery->image) }}" class="venobox" data-gall="gallery">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" 
                                         alt="{{ $gallery->title }}">
                                    <div class="gallery-overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-caption">
                                <h4>{{ $gallery->title }}</h4>
                                <p>{{ $gallery->description }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Belum ada galeri</p>
                    </div>
                @endforelse
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 text-center">
                    {{ $galleries->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->

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

    <script>
        $(document).ready(function(){
            $('.venobox').venobox({
                bgcolor: '',
                overlayColor: 'rgba(6, 12, 34, 0.85)',
                closeBackground: '',
                closeColor: '#fff'
            }); 
        });
    </script>

    <style>
        .gallery-area {
            background: #f9f9f9;
            padding: 60px 0;
        }

        .gallery-item {
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .gallery-image {
            position: relative;
            padding-top: 75%;
            overflow: hidden;
        }

        .gallery-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,100,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .gallery-overlay i {
            color: white;
            font-size: 30px;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-item:hover .gallery-image img {
            transform: scale(1.1);
        }

        .gallery-caption {
            padding: 15px;
            background: white;
        }

        .gallery-caption h4 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #333;
        }

        .gallery-caption p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }

        .pagination {
            margin-top: 30px;
        }

        .pagination > li > a,
        .pagination > li > span {
            color: #006400;
            border: 1px solid #006400;
        }

        .pagination > .active > a,
        .pagination > .active > span {
            background-color: #006400;
            border-color: #006400;
        }
    </style>
</body>
</html> 
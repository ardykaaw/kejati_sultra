<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sarana & Prasarana - Kejaksaan Tinggi Sulawesi Tenggara</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/logo/kejaksaanri.png') }}" rel="icon">
    
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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <div id="preloader"></div>

    @include('layouts.header')

    <!-- Start Sarana Area -->
    <div class="sarana-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-area">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcrumb-text">
                                    <a href="{{ route('welcome') }}">Beranda</a> / Sarana & Prasarana
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-title">
                        <h2>Sarana & Prasarana</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    @if($saranas->count() > 0)
                        @foreach($saranas as $sarana)
                            <div class="facility-item mb-4">
                                <div class="row equal-height">
                                    @if($sarana->image)
                                        <div class="col-md-6">
                                            <div class="facility-image">
                                                <img src="{{ asset('storage/'.$sarana->image) }}" 
                                                     alt="{{ $sarana->title }}" 
                                                     class="img-fluid">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-md-{{ $sarana->image ? '6' : '12' }}">
                                        <div class="facility-info">
                                            <h3 class="facility-title">{{ strtoupper($sarana->title) }}</h3>
                                            <div class="facility-desc">
                                                <p>
                                                    <i class="fa fa-check-circle text-success"></i>
                                                    {{ strip_tags($sarana->content) }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-5">
                            <p>Informasi sarana & prasarana belum tersedia.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- End Sarana Area -->

    @include('layouts.footer')

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

<style>
.sarana-area {
    padding: 100px 0;
    background: #f9f9f9;
}

.breadcrumb-area {
    padding: 20px 0;
    margin-bottom: 30px;
}

.breadcrumb-text {
    font-size: 16px;
}

.breadcrumb-text a {
    color: #006400;
}

.section-title {
    margin-bottom: 40px;
    text-align: center;
}

.section-title h2 {
    font-size: 32px;
    font-weight: 600;
    color: #333;
    position: relative;
    margin-bottom: 20px;
    padding-bottom: 20px;
}

.section-title h2:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, #006400, #28a745);
    border-radius: 2px;
}

.facility-item {
    background: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    height: 100%;
}

.facility-image {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 20px;
    height: 300px;
}

.facility-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.facility-image:hover img {
    transform: scale(1.05);
}

.facility-info {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.facility-title {
    color: #006400;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 20px;
    border-bottom: 2px solid #28a745;
    padding-bottom: 10px;
    display: inline-block;
}

.facility-desc {
    color: #666;
    line-height: 1.8;
    text-align: justify;
    white-space: pre-wrap;
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
    padding: 15px;
}

.facility-desc p {
    margin-bottom: 15px;
    padding-left: 25px;
    position: relative;
    white-space: pre-wrap;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.facility-desc i {
    position: absolute;
    left: 0;
    top: 5px;
    color: #28a745;
}

.row.equal-height {
    display: flex;
    flex-wrap: wrap;
}

.row.equal-height > [class*='col-'] {
    display: flex;
    flex-direction: column;
}

@media (max-width: 768px) {
    .facility-item {
        padding: 20px;
    }

    .facility-image {
        height: 200px;
        margin-bottom: 15px;
    }

    .facility-title {
        font-size: 20px;
        margin-bottom: 15px;
    }

    .facility-desc {
        font-size: 14px;
    }
}
</style> 
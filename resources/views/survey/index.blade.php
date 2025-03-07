<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Survey Kepuasan - Kejaksaan Tinggi Sulawesi Tenggara</title>
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

    <!-- Start Survey Area -->
    <div class="survey-area area-padding" style="margin-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Survey Kepuasan Masyarakat</h2>
                        <p>Bantu kami meningkatkan kualitas pelayanan dengan memberikan penilaian Anda</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="survey-box">
                        <div class="survey-intro">
                            <div class="intro-icon">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h3>Bagaimana pengalaman Anda dengan layanan kami?</h3>
                            <p>Silakan pilih salah satu emotikon di bawah ini sesuai dengan tingkat kepuasan Anda</p>
                        </div>

                        <form action="{{ route('survey.store') }}" method="POST" class="survey-form">
                            @csrf
                            <div class="rating-buttons">
                                <button type="submit" name="rating" value="tidak_puas" class="rating-btn tidak-puas">
                                    <div class="rating-icon">
                                        <i class="fa fa-frown-o"></i>
                                    </div>
                                    <div class="rating-content">
                                        <span class="rating-label">Tidak Puas</span>
                                        <div class="rating-count">
                                            <span class="count">{{ $ratingCounts['tidak_puas'] }}</span>
                                            <span class="count-label">responden</span>
                                        </div>
                                    </div>
                                </button>

                                <button type="submit" name="rating" value="kurang_puas" class="rating-btn kurang-puas">
                                    <div class="rating-icon">
                                        <i class="fa fa-meh-o"></i>
                                    </div>
                                    <div class="rating-content">
                                        <span class="rating-label">Kurang Puas</span>
                                        <div class="rating-count">
                                            <span class="count">{{ $ratingCounts['kurang_puas'] }}</span>
                                            <span class="count-label">responden</span>
                                        </div>
                                    </div>
                                </button>

                                <button type="submit" name="rating" value="cukup_puas" class="rating-btn cukup-puas">
                                    <div class="rating-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="rating-content">
                                        <span class="rating-label">Cukup Puas</span>
                                        <div class="rating-count">
                                            <span class="count">{{ $ratingCounts['cukup_puas'] }}</span>
                                            <span class="count-label">responden</span>
                                        </div>
                                    </div>
                                </button>

                                <button type="submit" name="rating" value="puas" class="rating-btn puas">
                                    <div class="rating-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="rating-content">
                                        <span class="rating-label">Puas</span>
                                        <div class="rating-count">
                                            <span class="count">{{ $ratingCounts['puas'] }}</span>
                                            <span class="count-label">responden</span>
                                        </div>
                                    </div>
                                </button>

                                <button type="submit" name="rating" value="sangat_puas" class="rating-btn sangat-puas">
                                    <div class="rating-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="rating-content">
                                        <span class="rating-label">Sangat Puas</span>
                                        <div class="rating-count">
                                            <span class="count">{{ $ratingCounts['sangat_puas'] }}</span>
                                            <span class="count-label">responden</span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </form>

                        <div class="survey-stats">
                            <div class="total-responses">
                                <i class="fa fa-users"></i>
                                <div class="stats-text">
                                    <h4>Total Responden</h4>
                                    <span class="total-count">{{ $total }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <style>
        .survey-area {
            background: #f9f9f9;
            padding: 90px 0;
        }

        .survey-box {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: 30px;
        }

        .rating-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin: 40px 0;
        }

        .rating-btn {
            flex: 0 0 180px;
            background: #fff;
            border: 2px solid #eee;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .rating-icon {
            font-size: 48px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .rating-content {
            width: 100%;
        }

        .rating-label {
            display: block;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .rating-count {
            background: rgba(0,0,0,0.03);
            padding: 8px 15px;
            border-radius: 12px;
            display: inline-block;
        }

        .count {
            font-size: 24px;
            font-weight: 700;
            line-height: 1;
            display: block;
        }

        .count-label {
            font-size: 13px;
            color: #666;
            margin-top: 5px;
            display: block;
        }

        .rating-btn:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .rating-btn:hover .rating-icon {
            transform: scale(1.1);
        }

        /* Button variants */
        .tidak-puas {
            background: linear-gradient(to bottom right, #fff5f5, #fff);
            border-color: #dc3545;
        }

        .kurang-puas {
            background: linear-gradient(to bottom right, #fff9e6, #fff);
            border-color: #ffc107;
        }

        .cukup-puas {
            background: linear-gradient(to bottom right, #e6f9ff, #fff);
            border-color: #17a2b8;
        }

        .puas {
            background: linear-gradient(to bottom right, #f0fff0, #fff);
            border-color: #28a745;
        }

        .sangat-puas {
            background: linear-gradient(to bottom right, #e6ffe6, #fff);
            border-color: #006400;
        }

        .survey-stats {
            margin-top: 30px;
            text-align: center;
        }

        .total-responses {
            display: inline-flex;
            align-items: center;
            gap: 25px;
            padding: 25px 50px;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        }

        .total-responses i {
            font-size: 48px;
            color: #006400;
            opacity: 0.9;
        }

        .stats-text {
            text-align: left;
        }

        .stats-text h4 {
            color: #1a1a1a;
            font-size: 20px;
            margin: 0 0 8px;
            font-weight: 600;
        }

        .total-count {
            font-size: 36px;
            font-weight: 700;
            color: #006400;
            line-height: 1;
        }

        @media (max-width: 768px) {
            .survey-area {
                padding-top: 60px;
            }

            .survey-box {
                padding: 30px 20px;
                margin: 0 15px 30px;
                border-radius: 15px;
            }

            .section-headline h2 {
                font-size: 32px;
            }

            .survey-subtitle {
                font-size: 16px;
                margin: 20px 15px 0;
            }

            .rating-buttons {
                flex-wrap: wrap;
                gap: 15px;
            }

            .rating-btn {
                flex: 0 0 140px;
            }

            .intro-icon i {
                font-size: 28px;
            }

            .survey-intro h3 {
                font-size: 24px;
                padding: 0 15px;
            }

            .survey-intro p {
                font-size: 14px;
                padding: 0 15px;
            }
        }

        @media (max-width: 480px) {
            .rating-buttons {
                flex-wrap: wrap;
            }

            .rating-btn {
                flex: 0 0 100%;
            }
        }
    </style>

    @if(session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Terima Kasih!',
            text: '{{ session('success') }}',
            timer: 3000,
            showConfirmButton: false,
            customClass: {
                popup: 'animated fadeInDown'
            }
        });
    </script>
    @endif
</body>
</html> 
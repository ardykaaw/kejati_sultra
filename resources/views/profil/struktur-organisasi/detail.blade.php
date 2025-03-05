<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Struktur Organisasi - Kejaksaan Tinggi Sulawesi Tenggara</title>
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
        .about-area {
            padding: 80px 0;
        }

        .struktur-content {
            padding: 40px;
        }

        .section-title {
            margin-bottom: 60px;
            text-align: center;
        }

        .section-title h2 {
            color: #006400;
            font-size: 36px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 20px;
            padding-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: #006400;
            border-radius: 2px;
        }

        .team-member {
            text-align: center;
            margin-bottom: 40px;
            perspective: 1000px;
        }

        .member-container {
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(0,100,0,0.1);
        }

        .member-container:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 15px 35px rgba(0,100,0,0.2);
            border-color: #006400;
        }

        .member-photo {
            position: relative;
            width: 220px;
            height: 220px;
            margin: 0 auto 25px;
            border-radius: 50%;
            padding: 8px;
            background: #FFD700;
        }

        .member-photo::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 50%;
            background: linear-gradient(45deg, #006400, #FFD700);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: -1;
        }

        .member-container:hover .member-photo::before {
            opacity: 1;
            transform: scale(1.1);
        }

        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #fff;
            transition: all 0.3s ease;
        }

        .member-info {
            padding: 20px 15px;
        }

        .member-info h4 {
            color: #006400;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
            transition: all 0.3s ease;
        }

        .member-container:hover .member-info h4 {
            color: #004d00;
        }

        .member-info p {
            color: #666;
            font-size: 16px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #FFD700;
            color: #006400;
            font-size: 16px;
            transition: all 0.3s ease;
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }

        .social-icons a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #006400;
            transform: translateY(100%);
            transition: all 0.3s ease;
            z-index: 1;
        }

        .social-icons a:hover::before {
            transform: translateY(0);
        }

        .social-icons a i {
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .social-icons a:hover i {
            color: #FFD700;
            transform: rotateY(360deg);
        }

        .social-icons a.disabled {
            background: #e9ecef;
            cursor: not-allowed;
            opacity: 0.6;
        }

        .org-level {
            margin-bottom: 70px;
        }

        .org-row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .org-row .team-member {
            flex: 0 0 auto;
            width: calc(33.333% - 30px);
        }

        /* Animasi untuk cards */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .team-member {
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
        }

        @media (max-width: 1200px) {
            .org-row .team-member {
                width: calc(50% - 30px);
            }
        }

        @media (max-width: 768px) {
            .org-row .team-member {
                width: 100%;
                max-width: 350px;
            }

            .member-photo {
                width: 180px;
                height: 180px;
            }

            .section-title h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <!-- header -->
    @include('layouts.header')

    <!-- Start Struktur Organisasi Area -->
    <div class="about-area area-padding" style="margin-top: 80px;">
        <div class="container">
            <div class="struktur-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Struktur Organisasi</h2>
                        </div>
                    </div>
                </div>

                @if($strukturs->count() > 0)
                    @php
                        $groupedStrukturs = $strukturs->groupBy('urutan')->sortKeys();
                    @endphp

                    @foreach($groupedStrukturs as $urutan => $members)
                        <div class="org-level">
                            <div class="org-row">
                                @foreach($members as $struktur)
                                    <div class="team-member">
                                        <div class="member-container">
                                            <div class="member-photo">
                                                <img src="{{ asset('storage/'.$struktur->foto) }}" 
                                                     alt="{{ $struktur->nama }}">
                                            </div>
                                            <div class="member-info">
                                                <h4>{{ $struktur->nama }}</h4>
                                                <p>{{ $struktur->jabatan }}</p>
                                                <div class="social-icons">
                                                    <a href="{{ $struktur->facebook ?? '#' }}" 
                                                       class="{{ $struktur->facebook ? '' : 'disabled' }}"
                                                       @if($struktur->facebook) target="_blank" @endif>
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="{{ $struktur->twitter ?? '#' }}" 
                                                       class="{{ $struktur->twitter ? '' : 'disabled' }}"
                                                       @if($struktur->twitter) target="_blank" @endif>
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="{{ $struktur->instagram ?? '#' }}" 
                                                       class="{{ $struktur->instagram ? '' : 'disabled' }}"
                                                       @if($struktur->instagram) target="_blank" @endif>
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                    <a href="{{ $struktur->linkedin ?? '#' }}" 
                                                       class="{{ $struktur->linkedin ? '' : 'disabled' }}"
                                                       @if($struktur->linkedin) target="_blank" @endif>
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12 text-center">
                        <p>Data struktur organisasi belum tersedia</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Struktur Organisasi Area -->

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
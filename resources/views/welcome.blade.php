<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kejaksaan Tinggi Sulawesi Tenggara</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/logo/kejaksaanri.png') }}" rel="icon">
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

    .single-blog {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }

    .single-blog:hover {
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      transform: translateY(-2px);
    }

    .single-blog-img {
      position: relative;
      overflow: hidden;
      border-radius: 8px 8px 0 0;
    }

    .single-blog-img img {
      transition: all 0.3s ease;
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
      margin: 15px;
      background: #006400;
      color: #fff;
      border-radius: 4px;
      text-decoration: none;
      transition: background 0.3s;
    }

    .ready-btn:hover {
      background: #005000;
      color: #fff;
      text-decoration: none;
    }

    .section-headline {
      margin-bottom: 50px;
      text-align: center;
      position: relative;
    }

    .section-headline h2 {
      font-size: 32px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      position: relative;
      padding-bottom: 20px;
      margin-bottom: 20px;
    }

    .section-headline h2:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: #006838;
    }

    .about-area {
      background: #fff;
      padding: 60px 0;
    }

    .well-left img {
      transition: transform 0.3s ease;
    }

    .well-left img:hover {
      transform: scale(1.02);
    }

    .about-content {
      font-size: 15px;
      line-height: 1.8;
      color: #666
    }

    .single-video {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      margin-bottom: 30px;
      transition: all 0.3s ease;
    }

    .single-video:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    .video-thumbnail {
      position: relative;
      padding-top: 56.25%; /* 16:9 Aspect Ratio */
      overflow: hidden;
    }

    .video-thumbnail img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .video-play-btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 60px;
      height: 60px;
      background: rgba(0,104,56,0.8);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      transition: all 0.3s ease;
      opacity: 0;
    }

    .video-thumbnail:hover .video-play-btn {
      opacity: 1;
    }

    .video-play-btn:hover {
      background: #006838;
      transform: translate(-50%, -50%) scale(1.1);
      color: white;
    }

    .video-text {
      padding: 20px;
    }

    .video-text h4 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #333;
    }

    .video-text p {
      color: #666;
      font-size: 14px;
      line-height: 1.5;
    }

    .modal-content {
      background-color: #000;
      border: none;
    }

    .modal-header {
      border-bottom: none;
      padding: 15px;
      background: rgba(0,0,0,0.8);
    }

    .modal-header .close {
      color: white;
      opacity: 1;
      text-shadow: none;
      background: none;
      border: none;
      font-size: 24px;
      padding: 0;
      margin: 0;
    }

    .modal-title {
      color: white;
      font-size: 18px;
    }

    .modal-body {
      position: relative;
      padding: 0 !important;
    }

    .embed-responsive {
      position: relative;
      display: block;
      width: 100%;
      padding: 0;
      overflow: hidden;
    }

    .embed-responsive::before {
      content: "";
      display: block;
      padding-top: 56.25%;
    }

    .embed-responsive iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
    }

    .video-play-btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 60px;
      height: 60px;
      background: rgba(0,104,56,0.8);
      border-radius: 50%;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 24px;
      transition: all 0.3s ease;
      opacity: 0;
      cursor: pointer;
    }

    .video-thumbnail:hover .video-play-btn {
      opacity: 1;
    }

    .video-play-btn:hover {
      background: #006838;
      transform: translate(-50%, -50%) scale(1.1);
    }

    .video-area {
      padding: 60px 0;
      background: #f8f9fa;
    }

    .section-headline h2 {
      position: relative;
      margin-bottom: 40px;
      padding-bottom: 15px;
      text-transform: uppercase;
      font-weight: 600;
    }

    .section-headline h2:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 3px;
      background: #006838;
    }

    .video-card {
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    .video-container {
      position: relative;
      width: 100%;
      padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    .video-info {
      padding: 20px;
    }

    .video-info h4 {
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .video-info p {
      color: #666;
      font-size: 14px;
      line-height: 1.6;
      margin: 0;
    }

    @media (max-width: 768px) {
      .video-card {
        margin-bottom: 15px;
      }
      
      .video-info {
        padding: 15px;
      }
      
      .video-info h4 {
        font-size: 16px;
      }
    }

    /* Tambahkan CSS untuk mengatur tampilan video */
    .video-stack {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .video-item {
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .video-container {
      position: relative;
      width: 100%;
      height: 180px;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
      .video-container {
        height: 150px;
      }
    }

    /* Styling untuk section berita */
    .blog-area {
      padding: 60px 0;
      background: #f9f9f9;
    }

    .section-headline h2 {
      font-size: 24px;
      font-weight: 600;
      position: relative;
      padding-bottom: 10px;
      margin-bottom: 20px;
      text-transform: uppercase;
      border-bottom: 2px solid #006838;
      display: inline-block;
    }

    .single-blog {
      background: #fff;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      height: 100%;
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    .single-blog-img {
      position: relative;
      overflow: hidden;
    }

    .blog-meta {
      padding: 10px 15px;
      border-bottom: 1px solid #eee;
    }

    .date-type {
      font-size: 13px;
      color: #666;
    }

    .blog-text {
      padding: 15px;
      flex-grow: 1;
    }

    .blog-text h4 {
      font-size: 16px;
      line-height: 1.4;
      margin-bottom: 10px;
    }

    .blog-text h4 a {
      color: #333;
      text-decoration: none;
      transition: color 0.3s;
    }

    .blog-text h4 a:hover {
      color: #006838;
    }

    .blog-text p {
      font-size: 14px;
      color: #666;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .blog-button {
      padding: 0 15px 15px;
    }

    .ready-btn {
      display: inline-block;
      padding: 8px 15px;
      background: #006838;
      color: #fff;
      border-radius: 3px;
      font-size: 13px;
      transition: all 0.3s;
      text-decoration: none;
    }

    .ready-btn:hover {
      background: #005229;
      color: #fff;
      text-decoration: none;
    }

    /* Styling untuk section video */
    .video-stack {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .video-item {
      background: #fff;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .video-container {
      position: relative;
      width: 100%;
      padding-top: 56.25%; /* 16:9 Aspect Ratio */
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
      .col-md-4 {
        margin-bottom: 20px;
      }
      
      .video-container {
        margin-bottom: 15px;
      }
      
      .section-headline h2 {
        font-size: 20px;
      }
    }

    /* Reset section headline styling */
    .section-headline {
      margin-bottom: 30px;
    }

    .section-headline h2 {
      font-size: 24px;
      font-weight: 600;
      position: relative;
      padding-bottom: 10px;
      margin-bottom: 0;
      text-transform: uppercase;
      display: inline-block;
    }

    .section-headline h2:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background: #006838;
    }

    /* Video sidebar styling */
    .video-sidebar {
      position: absolute;
      right: 0;
      top: 0;
      width: 300px;
      padding-left: 20px;
    }

    .video-stack {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .video-item {
      background: #fff;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .video-container {
      position: relative;
      width: 100%;
      padding-top: 56.25%;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    /* Blog styling */
    .blog-area {
      padding: 60px 0;
      background: #f9f9f9;
      position: relative;
    }

    .single-blog {
      background: #fff;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      height: 100%;
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    .blog-meta {
      padding: 10px 15px;
      border-bottom: 1px solid #eee;
    }

    .blog-text {
      padding: 15px;
      flex-grow: 1;
    }

    .blog-button {
      padding: 0 15px 15px;
    }

    .ready-btn {
      display: inline-block;
      padding: 8px 15px;
      background: #006838;
      color: #fff;
      border-radius: 3px;
      font-size: 13px;
      transition: all 0.3s;
      text-decoration: none;
    }

    .ready-btn:hover {
      background: #005229;
      color: #fff;
    }

    /* Responsive styling */
    @media (max-width: 1200px) {
      .video-sidebar {
        position: relative;
        width: 100%;
        padding-left: 0;
        margin-top: 30px;
      }
      
      .col-md-8.col-md-offset-2 {
        margin-left: 0;
        width: 100%;
      }
    }

    /* Video section styling */
    .video-section {
      padding-right: 0;
      margin-right: -15px;
    }

    .video-stack {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .video-item {
      background: #fff;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .video-container {
      position: relative;
      width: 100%;
      padding-top: 65%;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    /* Container styling */
    .container-fluid {
      padding-right: 0;
      padding-left: 30px;
      max-width: 1800px;
      margin: 0 auto;
    }

    /* Section headline styling */
    .section-headline {
      margin-bottom: 50px;
      text-align: center;
      position: relative;
    }

    .section-headline h2 {
      font-size: 24px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      position: relative;
      padding-bottom: 20px; /* Tambah padding bawah */
    }

    /* Garis bawah untuk judul */
    .section-headline h2:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px; /* Lebar garis */
      height: 3px; /* Ketebalan garis */
      background: #006838; /* Warna hijau */
    }

    /* Hapus semua style section-headline lainnya yang mungkin konflik */
    .section-headline,
    .section-headline h2,
    .section-headline:after {
      border: none;
      margin: 0;
    }

    .section-headline h2 {
      margin-bottom: 0;
    }

    /* Blog area styling */
    .blog-area {
      padding: 60px 0;
      background: #f9f9f9;
    }

    /* Responsive styling */
    @media (max-width: 1200px) {
      .col-md-7.col-md-offset-1 {
        margin-left: 0;
        width: 100%;
      }
      
      .video-section {
        width: 100%;
        padding-right: 15px;
        margin-right: 0;
        margin-top: 30px;
      }
      
      .container-fluid {
        padding-right: 15px;
      }
      
      .video-container {
        padding-top: 56.25%;
      }
    }

    /* Ganti class section-headline menjadi news-headline untuk menghindari konflik */
    .news-headline {
      margin-bottom: 30px;
      text-align: center;
      position: relative;
    }

    .news-headline h2 {
      font-size: 24px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      margin: 0;
      padding: 0;
      border: none;
      background: none;
    }

    .news-headline:after {
      content: '';
      display: block;
      width: 100%;
      height: 1px;
      background: #000;
      margin-top: 15px;
    }

    /* Reset semua style yang mungkin menyebabkan garis tambahan */
    .section-headline,
    .section-headline h2,
    .section-headline:after,
    .section-headline h2:after {
      border: none;
      background: none;
      padding: 0;
      margin: 0;
    }

    /* Container dan section styling */
    .container-fluid {
      padding-right: 0;
      padding-left: 30px;
      max-width: 1800px;
      margin: 0 auto;
    }

    .video-section {
      padding-right: 0;
      margin-right: -15px;
    }

    /* Responsive styling */
    @media (max-width: 1200px) {
      .video-section {
        width: 100%;
        padding-right: 15px;
        margin-right: 0;
        margin-top: 30px;
      }
    }

    /* Style baru untuk news-title (Berita dan Video) */
    .news-title {
      margin-bottom: 40px;
      text-align: center;
      position: relative;
    }

    .news-title h2 {
      font-size: 32px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      position: relative;
      padding-bottom: 20px;
      margin-bottom: 20px;
    }

    .news-title h2:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: #006838;
    }

    /* Style khusus untuk section Tentang Kami */
    #about .section-headline {
      margin-bottom: 50px;
      text-align: center;
      position: relative;
    }

    #about .section-headline h2 {
      font-size: 32px;
      font-weight: 600;
      text-transform: uppercase;
      display: inline-block;
      position: relative;
      padding-bottom: 20px;
      margin-bottom: 20px;
      border: none;
    }

    #about .section-headline h2:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background: #006838;
      display: block;
    }

    /* Hapus atau comment style yang konflik */
    /* Reset semua style section-headline lainnya yang mungkin konflik */
    .section-headline,
    .section-headline h2,
    .section-headline:after,
    .section-headline h2:after {
      border: none;
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
                      <li><a href="{{ route('about.detail') }}" style="color: white;">Tentang Kami</a></li>
                      <li><a href="{{ route('visi-misi.detail') }}" style="color: white;">Visi Misi</a></li>
                      <li><a href="{{ route('tri-krama.detail') }}" style="color: white;">Tri Krama Adhyaksa</a></li>
                      <li><a href="{{ route('struktur-organisasi.detail') }}" style="color: white;">Struktur Organisasi</a></li>
                    </ul> 
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">Layanan <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="https://cms-publik.kejaksaan.go.id/" style="color: white;">Cek Perkara</a></li>
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
                    <a class="page-scroll" href="{{ route('news.all') }}" style="color: white;">Berita</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{ route('survey.index') }}" style="color: white;">Survey</a>
                  </li>
                  <li>
                    <a href="{{ route('gallery.show') }}" style="color: white;">Galeri</a>
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
            <h2>TENTANG KAMI</h2>
          </div>
        </div>
      </div>
      <div class="row">
        @if(isset($about))
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                @if($about->image)
                  <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" 
                       class="img-fluid" 
                       style="width: 100%; height: 450px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                @else
                  <img src="img/about/default.jpg" alt="Default Image" 
                       style="width: 100%; height: 450px; object-fit: cover; border-radius: 8px;">
                @endif
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <div class="about-content" style="position: relative;">
                  <div class="content-preview" style="max-height: 300px; overflow: hidden; margin-bottom: 20px;">
                    {!! Str::limit(strip_tags($about->content), 500) !!}
                  </div>
                  <div class="text-center">
                    <a href="{{ route('about.detail') }}" class="ready-btn" style="color: white;">
                      Baca Selengkapnya
                      <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @else
          <div class="col-md-12 text-center">
            <p>Konten belum tersedia</p>
          </div>
        @endif
      </div>
    </div>
  </div>

  <!-- Start Blog Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="container-fluid">
        <div class="row">
          <!-- Kolom Berita -->
          <div class="col-md-7 col-md-offset-1">
            <div class="news-title">
              <h2>BERITA TERBARU</h2>
            </div>
            <div class="row">
              @if(isset($latestNews) && count($latestNews) > 0)
                @foreach($latestNews->take(3) as $news)
                  <div class="col-md-4">
                    <div class="single-blog">
                      <div class="single-blog-img">
                        <img src="{{ asset('storage/' . $news->thumbnail) }}" 
                             alt="{{ $news->title }}"
                             style="width: 100%; height: 180px; object-fit: cover;">
                      </div>
                      <div class="blog-meta">
                        <span class="date-type">
                          <i class="fa fa-calendar"></i>
                          {{ $news->created_at->format('d M, Y') }}
                        </span>
                      </div>
                      <div class="blog-text">
                        <h4>
                          <a href="{{ route('news.show', $news->id) }}">{{ Str::limit($news->title, 50) }}</a>
                        </h4>
                        <p>{{ Str::limit($news->short_description, 80) }}</p>
                      </div>
                      <div class="blog-button">
                        <a href="{{ route('news.show', $news->id) }}" class="ready-btn">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @else
                <div class="col-12 text-center">
                  <p>Belum ada berita terbaru.</p>
                </div>
              @endif
            </div>
          </div>

          <!-- Kolom Video -->
          <div class="col-md-3 video-section">
            <div class="news-title">
              <h2>VIDEO</h2>
            </div>
            <div class="video-stack">
              @if(isset($videos) && count($videos) > 0)
                @foreach($videos->take(3) as $video)
                  <div class="video-item">
                    <div class="video-container">
                      <iframe 
                        src="https://www.youtube.com/embed/{{ $video->youtube_id }}" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                      </iframe>
                    </div>
                  </div>
                @endforeach
              @else
                <p>Belum ada video.</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

  <!-- Video Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Video Player</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="stopVideo()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <div id="youtube-player"></div>
                </div>
            </div>
        </div>
    </div>
  </div>

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
                  Location:  kendari, Sulawesi Tenggara<br>
                  <!-- <span>NY 535022, USA</span> -->
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.7692435878915!2d122.5101405!3d-3.9769296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f2c731c1ace7%3A0x98d62b3c7af9b08c!2sKejaksaan%20Tinggi%20Sulawesi%20Tenggara!5e0!3m2!1sen!2sid!4v1709648364532" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
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

                <!-- <p style="color: white;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p> -->
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
                <h4 style="color: white;">Informasi</h4>
                <p style="color: white;">
                  Hubungi Kami disini, untuk Pengaduan
                </p>
                <div class="footer-contacts">
                  <p style="color: white;"><span>call:</span> +123 456 789</p>
                  <p style="color: white;"><span>Email:</span> contact@example.com</p>
                  <p style="color: white;"><span>Jam Kerja:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color: white; font-size: 18px; font-weight: 600; margin-bottom: 20px;">Menu Utama</h4>
                <div class="footer-links">
                  <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                      <a href="/" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">
                        <i class="fa fa-angle-right" style="margin-right: 8px;"></i>Beranda
                      </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                      <a href="#" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">
                        <i class="fa fa-angle-right" style="margin-right: 8px;"></i>Profil
                      </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                      <a href="#" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">
                        <i class="fa fa-angle-right" style="margin-right: 8px;"></i>Layanan
                      </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                      <a href="{{ route('news.all') }}" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">
                        <i class="fa fa-angle-right" style="margin-right: 8px;"></i>Berita
                      </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                      <a href="#survey" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">
                        <i class="fa fa-angle-right" style="margin-right: 8px;"></i>Survey
                      </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                      <a href="{{ route('gallery.show') }}" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">
                        <i class="fa fa-angle-right" style="margin-right: 8px;"></i>Galeri
                      </a>
                    </li>
                    <li style="margin-bottom: 10px;">
                      <a href="#contact" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;">
                        <i class="fa fa-angle-right" style="margin-right: 8px;"></i>Kontak
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- <h4 style="color: white; font-size: 18px; font-weight: 600; margin: 30px 0 20px;">Layanan Online</h4>
                <div class="footer-links">
                  <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;">
                      <a href="https://cms-publik.kejaksaan.go.id/" style="color: white; text-decoration: none; font-size: 14px; transition: all 0.3s ease;"> -->
                <!-- <h4 style="color: white;">Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="/img/portfolio/6.jpg" alt=""></a>
                </div> -->
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

  <!-- Tambahkan JavaScript untuk YouTube Player -->
  <script src="https://www.youtube.com/iframe_api"></script>
  <script>
  let player;

  function onYouTubeIframeAPIReady() {
      // YouTube API is ready
  }

  function playVideo(videoId) {
      $('#videoModal').modal('show');
      
      if (player) {
          player.destroy();
      }
      
      player = new YT.Player('youtube-player', {
          height: '100%',
          width: '100%',
          videoId: videoId,
          playerVars: {
              'autoplay': 1,
              'playsinline': 1,
              'modestbranding': 1,
              'rel': 0
          },
          events: {
              'onReady': onPlayerReady
          }
      });
  }

  function onPlayerReady(event) {
      event.target.playVideo();
  }

  function stopVideo() {
      if (player) {
          player.stopVideo();
      }
  }

  // Stop video when modal is closed
  $('#videoModal').on('hidden.bs.modal', function () {
      stopVideo();
  });
  </script>
</body>

</html>

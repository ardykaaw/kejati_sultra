<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
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
                            <a class="navbar-brand page-scroll sticky-logo" href="/" style="display: flex; align-items: center; margin-left: 0; padding-left: 0;">
                                <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Kejaksaan RI Logo" title="Kejaksaan RI" style="max-height: 50px; margin-right: 10px;">
                                <span style="color: white; font-size: 16px; line-height: 1.2;">
                                    <strong>Kejaksaan Tinggi</strong><br>
                                    Sulawesi Tenggara
                                </span>
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="/" style="color: white;">Beranda</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">Profil <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('about.detail') }}" style="color: white;">Tentang Kami</a></li>
                                        <li><a href="{{ route('visi-misi.detail') }}" style="color: white;">Visi Misi</a></li>
                                        <li><a href="{{ route('struktur-organisasi.detail') }}" style="color: white;">Struktur Organisasi</a></li>
                                        <li><a href="{{ route('tri-krama.detail') }}" style="color: white;">Tri Krama Adhyaksa</a></li>
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
                                    <a href="{{ route('news.all') }}" style="color: white;">Berita</a>
                                </li>
                                <li>
                                    <a href="#survey" style="color: white;">Survey</a>
                                </li>
                                <li>
                                    <a href="#contact" style="color: white;">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header> 
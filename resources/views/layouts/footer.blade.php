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
                                <h2 style="color: white;">Kejaksaan Tinggi<br>Sulawesi Tenggara</h2>
                            </div>
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
                            <h4 style="color: white;">INFORMASI</h4>
                            <p style="color: white;">Hubungi Kami disini, untuk Pengaduan</p>
                            <div class="footer-contacts">
                                <p><span>call:</span> (0401) 3121429</p>
                                <p><span>Email:</span> kejati.sultra@kejaksaan.go.id</p>
                                <p><span>Jam Kerja:</span> 08.00-16.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4 style="color: white;">MENU UTAMA</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ route('welcome') }}">Beranda</a></li>
                                <li><a href="#">Profil</a></li>
                                <li><a href="#">Layanan</a></li>
                                <li><a href="{{ route('news.all') }}">Berita</a></li>
                                <li><a href="{{ route('survey.index') }}">Survey</a></li>
                                <li><a href="{{ route('gallery.show') }}">Galeri</a></li>
                                <li><a href="#contact">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom" style="background-color: #003300;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p style="color: white;">
                            © Copyright KEJAKSAAN TINGGI SULAWESI TENGGARA. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.footer-area {
    padding: 40px 0;
}

.footer-head h4 {
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
}

.footer-contacts p {
    color: #fff;
    margin-bottom: 10px;
}

.footer-contacts span {
    color: #28a745;
    font-weight: 600;
}

.footer-icons ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 10px;
}

.footer-icons ul li a {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: rgba(255,255,255,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.footer-icons ul li a:hover {
    background: #28a745;
}

.footer-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-menu li {
    margin-bottom: 10px;
}

.footer-menu a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-menu a:hover {
    color: #28a745;
}

.footer-area-bottom {
    padding: 20px 0;
    border-top: 1px solid rgba(255,255,255,0.1);
}

.copyright p {
    margin: 0;
    font-size: 14px;
}

@media (max-width: 768px) {
    .footer-content {
        margin-bottom: 30px;
        text-align: center;
    }
    
    .footer-head h4 {
        margin-bottom: 15px;
    }

    .footer-icons ul {
        justify-content: center;
    }

    .footer-menu {
        text-align: center;
    }
}
</style> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .sidebar {
        background: #ffffff;
        padding: 20px;
        min-height: 100vh;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        position: relative;
    }

    .sidebar-header {
        margin-bottom: 30px;
    }

    .header-logo {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .sidebar-logo {
        width: 50px;
        height: auto;
    }

    .logo-text {
        color: #006400;
    }

    .logo-title {
        font-size: 16px;
        font-weight: bold;
        margin: 0;
    }

    .logo-subtitle {
        font-size: 14px;
        color: #666;
        margin: 0;
    }

    .menu-section {
        margin-bottom: 25px;
    }

    .menu-title {
        color: #666;
        font-size: 12px;
        font-weight: 500;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 12px 15px;
        color: #666;
        text-decoration: none;
        border-radius: 8px;
        margin-bottom: 5px;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        background-color: rgba(0, 100, 0, 0.1);
        color: #006400;
    }

    .nav-link.active {
        background-color: #006400;
        color: white;
    }

    .nav-link i {
        margin-right: 12px;
        width: 20px;
        text-align: center;
        color: #006400;
    }

    .nav-link.active i {
        color: white;
    }

    /* Styling untuk submenu */
    .submenu {
        display: none;
        margin-left: 32px;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .submenu.show {
        display: block;
    }

    .submenu .nav-link {
        padding: 8px 15px;
        font-size: 14px;
        margin-bottom: 2px;
        position: relative;
    }

    .submenu .nav-link i {
        font-size: 14px;  /* Ukuran ikon submenu sedikit lebih kecil */
        margin-right: 10px;
        width: 16px;
        color: #666;  /* Warna default ikon submenu */
    }

    .submenu .nav-link:hover i {
        color: #006400;  /* Warna ikon saat hover */
    }

    .submenu .nav-link.active {
        background-color: rgba(0, 100, 0, 0.1);
        color: #006400;
    }

    .submenu .nav-link.active i {
        color: #006400;
    }

    .nav-item > .nav-link.active + .submenu {
        display: block;
    }

    /* Styling untuk user profile */
    .user-profile {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 250px;
        background: #ffffff;
        display: flex;
        align-items: center;
        padding: 15px 20px;
        border-top: 1px solid #e9ecef;
        z-index: 1000;
    }

    .user-avatar {
        width: 40px;
        height: 40px;
        background-color: #006400;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
    }

    .user-avatar i {
        color: white;
    }

    .user-info {
        flex-grow: 1;
    }

    .user-name {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
    }

    .user-role {
        font-size: 12px;
        color: #666;
    }

    .logout-btn {
        background: none;
        border: none;
        color: #ff0000;
        cursor: pointer;
        padding: 5px;
        transition: color 0.3s;
    }

    .logout-btn:hover {
        color: #bb2d3b;
    }

    /* Styling untuk toggle icon */
    .nav-link span {
        display: flex;
        align-items: center;
    }

    .nav-link i.fa-caret-down {
        margin-left: auto;
        transition: transform 0.3s;
    }

    .nav-link.active i.fa-caret-down {
        transform: rotate(180deg);
    }

    /* Tambahkan padding bottom pada nav-menu */
    .nav-menu {
        padding-bottom: 80px;
    }
</style>

<nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <div class="header-logo">
            <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Logo" class="sidebar-logo">
            <div class="logo-text">
                <h1 class="logo-title">KEJAKSAAN TINGGI</h1>
                <p class="logo-subtitle">SULAWESI TENGGARA</p>
            </div>
        </div>
    </div>
    
    <div class="nav-menu">
        <div class="menu-section">
            <div class="menu-title">Menu Utama</div>
            <div class="nav flex-column">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
                
                <!-- Menu Profil -->
                <div class="nav-item">
                    <a href="#" class="nav-link" id="profilMenu">
                        <span>
                            <i class="fas fa-user"></i>
                            Profil
                        </span>
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="submenu">
                        <a href="{{ route('about.index') }}" class="nav-link">
                            <i class="fas fa-info-circle"></i>
                            Tentang Kami
                        </a>
                        <a href="{{ route('visi-misi.index') }}" class="nav-link">
                            <i class="fas fa-bullseye"></i>
                            Visi Misi
                        </a>
                        <a href="{{ route('struktur-organisasi.index') }}" class="nav-link">
                            <i class="fas fa-sitemap"></i>
                            Struktur Organisasi
                        </a>
                        <a href="{{ route('tri-krama.index') }}" class="nav-link">
                            <i class="fas fa-book"></i>
                            Tri Krama Adhyaksa
                        </a>
                    </div>
                </div>

                <!-- Menu Layanan -->
                <div class="nav-item">
                    <a href="#" class="nav-link" id="layananMenu">
                        <span>
                            <i class="fas fa-cogs"></i>
                            Layanan
                        </span>
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="submenu">
                        <a href="{{ route('reformasi-birokrasi.index') }}" class="nav-link">
                            <i class="fas fa-sync"></i>
                            Reformasi Birokrasi
                        </a>
                        <a href="{{ route('sarana.index') }}" class="nav-link">
                            <i class="fas fa-building"></i>
                            Sarana & Prasarana
                        </a>
                    </div>
                </div>

                <!-- Menu Berita -->
                <a href="#" class="nav-link">
                    <i class="fas fa-newspaper"></i>
                    Berita
                </a>

                <!-- Menu Survey -->
                <a href="#" class="nav-link">
                    <i class="fas fa-poll"></i>
                    Survey
                </a>
            </div>
        </div>
    </div>

    <!-- User Profile di bagian bawah -->
    <div class="user-profile">
        <div class="user-avatar">
            <i class="fas fa-user"></i>
        </div>
        <div class="user-info">
            <h6 class="user-name">{{ auth()->user()->name }}</h6>
            <div class="user-role">Administrator</div>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="logout-btn" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk menu Profil
        const profilMenu = document.getElementById('profilMenu');
        const profilSubmenu = profilMenu.nextElementSibling;
        
        // Fungsi untuk menu Layanan
        const layananMenu = document.getElementById('layananMenu');
        const layananSubmenu = layananMenu.nextElementSibling;
        
        // Cek URL untuk active state
        const currentPath = window.location.pathname;

        // Set active state untuk Dashboard
        const dashboardLink = document.querySelector('a[href="{{ route("dashboard") }}"]');
        if (currentPath === '/dashboard') {
            dashboardLink.classList.add('active');
        } else {
            dashboardLink.classList.remove('active');
        }
        
        // Fungsi untuk mengatur active state pada menu dan submenu
        function setActiveMenu(menuButton, submenu, pathIdentifier) {
            const submenuLinks = submenu.querySelectorAll('.nav-link');
            let isSubmenuActive = false;

            // Cek apakah ada submenu yang active
            submenuLinks.forEach(link => {
                if (link.getAttribute('href') === window.location.pathname) {
                    link.classList.add('active');
                    isSubmenuActive = true;
                } else {
                    link.classList.remove('active');
                }
            });

            // Jika ada submenu yang active, buka parent menu
            if (isSubmenuActive || currentPath.includes(pathIdentifier)) {
                submenu.classList.add('show');
                menuButton.classList.add('active');
            } else {
                submenu.classList.remove('show');
                menuButton.classList.remove('active');
            }
        }

        // Set active state untuk menu Profil
        setActiveMenu(profilMenu, profilSubmenu, '/profil/');

        // Set active state untuk menu Layanan
        setActiveMenu(layananMenu, layananSubmenu, '/layanan/');
        
        // Event listener untuk Profil
        profilMenu.addEventListener('click', function(e) {
            e.preventDefault();
            profilSubmenu.classList.toggle('show');
            this.classList.toggle('active');
            
            // Tutup menu Layanan jika terbuka
            if (layananSubmenu.classList.contains('show')) {
                layananSubmenu.classList.remove('show');
                layananMenu.classList.remove('active');
            }
        });
        
        // Event listener untuk Layanan
        layananMenu.addEventListener('click', function(e) {
            e.preventDefault();
            layananSubmenu.classList.toggle('show');
            this.classList.toggle('active');
            
            // Tutup menu Profil jika terbuka
            if (profilSubmenu.classList.contains('show')) {
                profilSubmenu.classList.remove('show');
                profilMenu.classList.remove('active');
            }
        });
    });
</script>

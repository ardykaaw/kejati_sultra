<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Kejaksaan Tinggi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --sidebar-width: 280px;
            --header-height: 70px;
            --primary-color: #006838;
            --secondary-color: #004d2a;
        }
        
        body {
            min-height: 100vh;
            background: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            height: var(--header-height);
            padding: 0 25px;
            display: flex;
            align-items: center;
            background: white;
            border-bottom: 1px solid #eef2f7;
        }

        .header-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .sidebar-logo {
            width: 45px;
            height: auto;
        }

        .logo-text {
            margin: 0;
        }

        .logo-title {
            font-size: 16px;
            font-weight: 600;
            color: var(--primary-color);
            margin: 0;
            line-height: 1.2;
        }

        .logo-subtitle {
            font-size: 12px;
            color: #6c757d;
            margin: 0;
        }

        .nav-menu {
            padding: 20px 0;
            height: calc(100vh - var(--header-height));
            overflow-y: auto;
        }

        .menu-section {
            padding: 0 15px;
            margin-bottom: 15px;
        }

        .menu-title {
            font-size: 12px;
            text-transform: uppercase;
            color: #6c757d;
            font-weight: 600;
            padding: 10px;
            letter-spacing: 0.5px;
        }

        .nav-link {
            padding: 12px 15px;
            color: #495057;
            border-radius: 8px;
            margin: 4px 10px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .nav-link:hover, .nav-link.active {
            background: var(--primary-color);
            color: white;
        }

        .nav-link i {
            width: 24px;
            font-size: 18px;
            text-align: center;
            margin-right: 10px;
            opacity: 0.85;
        }

        /* Main Content Styles */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 30px;
            min-height: 100vh;
        }

        .page-header {
            margin-bottom: 30px;
            background: white;
            border-radius: 12px;
            padding: 20px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .welcome-card {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            padding: 35px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 100%;
            background: url("{{ asset('img/logo/kejaksaanri.png') }}") no-repeat center right;
            background-size: contain;
            opacity: 0.1;
        }

        .welcome-title {
            font-size: 28px;
            font-weight: 600;
            color: white;
            margin-bottom: 10px;
        }

        .welcome-text {
            color: rgba(255,255,255,0.9);
            font-size: 16px;
            max-width: 600px;
        }

        .stats-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            height: 100%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: all 0.3s;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .stats-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .stats-icon {
            width: 50px;
            height: 50px;
            background: rgba(0, 104, 56, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 24px;
        }

        .stats-info {
            text-align: right;
        }

        .stats-value {
            font-size: 28px;
            font-weight: 700;
            color: #2d3436;
            line-height: 1;
            margin-bottom: 5px;
        }

        .stats-label {
            color: #6c757d;
            font-size: 14px;
            font-weight: 500;
        }

        .stats-trend {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 13px;
            margin-top: 10px;
        }

        .trend-up {
            color: #28a745;
        }

        .trend-down {
            color: #dc3545;
        }

        .user-profile {
            padding: 15px 25px;
            border-top: 1px solid #eef2f7;
            display: flex;
            align-items: center;
            background: white;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 18px;
        }

        .user-info {
            flex: 1;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
            color: #2d3436;
            margin: 0;
        }

        .user-role {
            font-size: 12px;
            color: #6c757d;
        }

        .logout-btn {
            color: #dc3545;
            background: none;
            border: none;
            padding: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .logout-btn:hover {
            color: #c82333;
            transform: translateY(-2px);
        }

        /* Scrollbar Styles */
        .nav-menu::-webkit-scrollbar {
            width: 6px;
        }

        .nav-menu::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .nav-menu::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }

        .nav-menu::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('components.sidebar')
    
    <!-- Main Content -->
    <div class="main-content">
        <div class="page-header">
            <h4 class="mb-0">Dashboard</h4>
        </div>

        <div class="welcome-card">
            <h1 class="welcome-title">Selamat Datang, {{ auth()->user()->name }}!</h1>
            <p class="welcome-text">Selamat datang di Dashboard Sistem Informasi Kejaksaan Tinggi Sulawesi Tenggara. Pantau dan kelola semua aktivitas dengan mudah melalui dashboard ini.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-header">
                        <div class="stats-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stats-info">
                            <div class="stats-value">245</div>
                            <div class="stats-label">Total Dokumen</div>
                        </div>
                    </div>
                    <div class="stats-trend trend-up">
                        <i class="fas fa-arrow-up"></i>
                        <span>12% dari bulan lalu</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-header">
                        <div class="stats-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="stats-info">
                            <div class="stats-value">8</div>
                            <div class="stats-label">Jadwal Hari Ini</div>
                        </div>
                    </div>
                    <div class="stats-trend trend-up">
                        <i class="fas fa-arrow-up"></i>
                        <span>3 lebih banyak</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-header">
                        <div class="stats-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stats-info">
                            <div class="stats-value">124</div>
                            <div class="stats-label">Total Pegawai</div>
                        </div>
                    </div>
                    <div class="stats-trend trend-up">
                        <i class="fas fa-arrow-up"></i>
                        <span>5 pegawai baru</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card">
                    <div class="stats-header">
                        <div class="stats-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="stats-info">
                            <div class="stats-value">12</div>
                            <div class="stats-label">Tugas Aktif</div>
                        </div>
                    </div>
                    <div class="stats-trend trend-down">
                        <i class="fas fa-arrow-down"></i>
                        <span>2 selesai hari ini</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
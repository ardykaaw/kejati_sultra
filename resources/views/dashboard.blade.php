@extends('layouts.app')

@section('content')
<div class="wrapper d-flex align-items-stretch">
    @include('components.sidebar')
    
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb -->
            <div class="content-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>

            <!-- Welcome Card -->
            <div class="welcome-card">
                <h1 class="welcome-title">Selamat Datang, {{ auth()->user()->name }}!</h1>
                <p class="welcome-text">Selamat datang di Dashboard Sistem Informasi Kejaksaan Tinggi Sulawesi Tenggara. Pantau dan kelola semua aktivitas dengan mudah melalui dashboard ini.</p>
            </div>

            <!-- Stats Cards -->
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
                                <div class="stats-value">7</div>
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
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Style untuk layout utama */
    .wrapper {
        min-height: 100vh;
    }

    /* Style untuk sidebar */
    #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        z-index: 999;
        min-width: 250px;
        max-width: 250px;
    }

    /* Style untuk content wrapper */
    .content-wrapper {
        margin-left: 250px;
        width: calc(100% - 250px);
        min-height: 100vh;
        padding: 20px;
    }

    /* Style untuk welcome card */
    .welcome-card {
        background: linear-gradient(135deg, #006400, #004d2a);
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

    /* Style untuk stats cards */
    .stats-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        height: 100%;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        transition: all 0.3s;
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
        background: rgba(0, 100, 0, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #006400;
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
</style>
@endpush 
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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Profil</li>
                        <li class="breadcrumb-item active" aria-current="page">Tri Krama Adhyaksa</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Tri Krama Adhyaksa</h5>
                            <a href="{{ route('tri-krama.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="content-text">
                                @if(isset($triKrama))
                                    <div class="tri-krama-content">
                                        <div class="section-icon text-center mb-4">
                                            <i class="fas fa-book fa-3x text-success"></i>
                                        </div>
                                        <div class="tri-krama-sections">
                                            <div class="row justify-content-center">
                                                <div class="col-md-4">
                                                    <div class="krama-card text-center mb-4">
                                                        <div class="krama-icon mb-3">
                                                            <i class="fas fa-balance-scale fa-2x"></i>
                                                        </div>
                                                        <h3 class="krama-title">Satya</h3>
                                                        <div class="krama-desc">
                                                            Kesetiaan yang bersumber pada rasa jujur
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="krama-card text-center mb-4">
                                                        <div class="krama-icon mb-3">
                                                            <i class="fas fa-hand-holding-heart fa-2x"></i>
                                                        </div>
                                                        <h3 class="krama-title">Adhi</h3>
                                                        <div class="krama-desc">
                                                            Kesempurnaan dalam bertugas
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="krama-card text-center mb-4">
                                                        <div class="krama-icon mb-3">
                                                            <i class="fas fa-shield-alt fa-2x"></i>
                                                        </div>
                                                        <h3 class="krama-title">Wicaksana</h3>
                                                        <div class="krama-desc">
                                                            Bijaksana dalam tutur kata dan perilaku
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tri-krama-detail mt-4">
                                                {!! $triKrama->content !!}
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center py-5">
                                        <i class="fas fa-book fa-3x text-muted mb-3"></i>
                                        <p class="text-muted">Belum ada konten. Silakan tambahkan konten baru.</p>
                                    </div>
                                @endif
                            </div>
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
    .btn-primary {
        background-color: #006400;
        border-color: #006400;
    }
    
    .btn-primary:hover {
        background-color: #005000;
        border-color: #005000;
    }

    .content-text {
        font-size: 16px;
    }

    .section-icon {
        color: #006400;
    }

    .krama-card {
        padding: 2rem;
        background: #f8f9fa;
        border-radius: 10px;
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid rgba(0,0,0,.05);
    }

    .krama-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,.1);
    }

    .krama-icon {
        color: #006400;
    }

    .krama-title {
        color: #006400;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }

    .krama-desc {
        color: #666;
        line-height: 1.6;
    }

    .tri-krama-detail {
        padding: 2rem;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,.05);
    }
</style> 
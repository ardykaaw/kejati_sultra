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
                        <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Struktur Organisasi</h5>
                            <a href="{{ route('struktur-organisasi.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="content-text">
                                @if(isset($strukturOrganisasi))
                                    <div class="struktur-content">
                                        <div class="description mb-4">
                                            {!! $strukturOrganisasi->content !!}
                                        </div>
                                        @if($strukturOrganisasi->image)
                                            <div class="struktur-image text-center">
                                                <div class="image-container p-3 bg-light rounded">
                                                    <img src="{{ asset('storage/'.$strukturOrganisasi->image) }}" 
                                                         alt="Struktur Organisasi" 
                                                         class="img-fluid shadow-sm">
                                                </div>
                                                <div class="mt-3">
                                                    <a href="{{ asset('storage/'.$strukturOrganisasi->image) }}" 
                                                       class="btn btn-outline-success" 
                                                       target="_blank">
                                                        <i class="fas fa-search-plus"></i> Lihat Gambar Lengkap
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="text-center py-5">
                                        <i class="fas fa-sitemap fa-3x text-muted mb-3"></i>
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

    .struktur-image {
        max-width: 1000px;
        margin: 0 auto;
    }

    .image-container {
        border: 1px solid rgba(0,0,0,.1);
    }

    .btn-outline-success {
        color: #006400;
        border-color: #006400;
    }

    .btn-outline-success:hover {
        background-color: #006400;
        border-color: #006400;
    }
</style>
@endpush 
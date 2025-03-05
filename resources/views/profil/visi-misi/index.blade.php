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
                        <li class="breadcrumb-item active" aria-current="page">Visi & Misi</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Visi & Misi</h5>
                            @if(!isset($visiMisi))
                                <a href="{{ route('visi-misi.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Tambah
                                </a>
                            @else
                                <a href="{{ route('visi-misi.edit', $visiMisi->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="content-text">
                                @if(isset($visiMisi))
                                    <div class="visi-misi-content">
                                        @if($visiMisi->image)
                                            <div class="text-center mb-4">
                                                <img src="{{ asset('storage/' . $visiMisi->image) }}" 
                                                     alt="Visi Misi Image" 
                                                     class="img-fluid rounded" 
                                                     style="max-height: 300px; object-fit: cover;">
                                                
                                                <!-- Debug: tampilkan path gambar -->
                                                <small class="d-none">Image path: {{ $visiMisi->image }}</small>
                                            </div>
                                        @endif
                                        <div class="visi-section mb-5">
                                            <div class="section-icon text-center mb-3">
                                                <i class="fas fa-eye fa-2x text-success"></i>
                                            </div>
                                            <h2 class="text-center mb-4">Visi & Misi</h2>
                                            {!! $visiMisi->content !!}
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center py-5">
                                        <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
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

    .visi-section, .misi-section {
        padding: 2rem;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .visi-section {
        margin-bottom: 2rem;
    }
</style>
@endpush 
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
                        <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Tentang Kami</h5>
                            <a href="{{ route('about.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="content-text">
                                @if(isset($about))
                                    {!! $about->content !!}
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
</style>
@endpush 
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
                        <li class="breadcrumb-item">Layanan</li>
                        <li class="breadcrumb-item active" aria-current="page">Reformasi Birokrasi</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Reformasi Birokrasi</h5>
                            <a href="{{ route('reformasi-birokrasi.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="content-text">
                                @if(isset($reformasiBirokrasi))
                                    <div class="reformasi-content">
                                        <h3 class="text-success mb-4">{{ $reformasiBirokrasi->title }}</h3>
                                        <div class="reformasi-body">
                                            {!! $reformasiBirokrasi->content !!}
                                        </div>
                                        <div class="mt-4">
                                            <a href="{{ route('reformasi-birokrasi.edit', $reformasiBirokrasi->id) }}" 
                                               class="btn btn-warning">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center py-5">
                                        <i class="fas fa-sync fa-3x text-muted mb-3"></i>
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

    .reformasi-content {
        padding: 20px;
        background: #fff;
        border-radius: 10px;
    }

    .reformasi-body {
        line-height: 1.8;
    }
</style>
@endpush 
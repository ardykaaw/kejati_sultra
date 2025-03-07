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
                        <li class="breadcrumb-item active" aria-current="page">Sarana & Prasarana</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Sarana & Prasarana</h5>
                            <a href="{{ route('sarana.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="content-text">
                                @if($saranas->count() > 0)
                                    @foreach($saranas as $sarana)
                                        <div class="sarana-content mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <div>
                                                    <h4 class="text-success mb-1">{{ $sarana->title }}</h4>
                                                    <small class="text-muted">Terakhir diperbarui: {{ $sarana->updated_at->format('d M Y H:i') }}</small>
                                                </div>
                                                <div>
                                                    <a href="{{ route('sarana.edit', $sarana->id) }}" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('sarana.destroy', $sarana->id) }}" 
                                                          method="POST" 
                                                          class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" 
                                                                class="btn btn-danger btn-sm"
                                                                onclick="confirmDelete(this)">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="row">
                                                @if($sarana->image)
                                                    <div class="col-md-4">
                                                        <img src="{{ asset('storage/'.$sarana->image) }}" 
                                                             alt="{{ $sarana->title }}" 
                                                             class="img-fluid rounded shadow-sm">
                                                    </div>
                                                @endif
                                                <div class="col-md-{{ $sarana->image ? '8' : '12' }}">
                                                    {!! $sarana->content !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-center py-5">
                                        <i class="fas fa-building fa-3x text-muted mb-3"></i>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<style>
    /* Style untuk fixed sidebar */
    .wrapper {
        min-height: 100vh;
        display: flex;
    }

    #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 250px;
        z-index: 1000;
        overflow-y: auto;
    }

    .content-wrapper {
        margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
        width: calc(100% - 250px);
        min-height: 100vh;
        padding: 25px;
        background: #f4f6f9;
        overflow-x: hidden;
    }

    /* Responsive untuk sidebar */
    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
            position: fixed;
        }

        #sidebar.active {
            margin-left: 0;
        }

        .content-wrapper {
            margin-left: 0;
            width: 100%;
        }
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
        line-height: 1.6;
    }

    .sarana-content {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .sarana-content img {
        max-width: 100%;
        height: auto;
    }

    .sarana-content p {
        margin-bottom: 1rem;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .card {
        box-shadow: 0 0 15px rgba(0,0,0,.05);
        border: none;
        margin-bottom: 1rem;
        overflow: hidden;
    }

    .card-header {
        background: white;
        border-bottom: 1px solid rgba(0,0,0,.05);
        padding: 15px 20px;
    }

    .card-body {
        padding: 20px;
        overflow-x: hidden;
    }

    .container-fluid {
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
        max-width: 100%;
    }

    .row {
        margin-right: 0;
        margin-left: 0;
    }

    table {
        max-width: 100%;
        width: 100%;
    }

    .note-editable {
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(button) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // Find the parent form and submit it
            const form = button.closest('form');
            if (form) {
                form.submit();
            }
        }
    });
}

// Tampilkan alert success/error jika ada
@if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        timer: 3000,
        showConfirmButton: false
    });
@endif

@if(session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}'
    });
@endif
</script>
@endpush 
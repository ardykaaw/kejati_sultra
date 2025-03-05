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
                                <i class="fas fa-plus"></i> Tambah Anggota
                            </a>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Urutan</th>
                                            <th>Sosial Media</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($strukturs as $struktur)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/'.$struktur->foto) }}" 
                                                         alt="{{ $struktur->nama }}" 
                                                         class="img-thumbnail"
                                                         style="max-width: 100px;">
                                                </td>
                                                <td>{{ $struktur->nama }}</td>
                                                <td>{{ $struktur->jabatan }}</td>
                                                <td>{{ $struktur->urutan }}</td>
                                                <td>
                                                    @if($struktur->facebook)
                                                        <a href="{{ $struktur->facebook }}" target="_blank" class="btn btn-sm btn-primary">
                                                            <i class="fab fa-facebook"></i>
                                                        </a>
                                                    @endif
                                                    @if($struktur->twitter)
                                                        <a href="{{ $struktur->twitter }}" target="_blank" class="btn btn-sm btn-info">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    @endif
                                                    @if($struktur->instagram)
                                                        <a href="{{ $struktur->instagram }}" target="_blank" class="btn btn-sm btn-danger">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    @endif
                                                    @if($struktur->linkedin)
                                                        <a href="{{ $struktur->linkedin }}" target="_blank" class="btn btn-sm btn-primary">
                                                            <i class="fab fa-linkedin"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('struktur-organisasi.edit', $struktur->id) }}" 
                                                       class="btn btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button type="button" 
                                                            class="btn btn-sm btn-danger delete-btn"
                                                            data-id="{{ $struktur->id }}"
                                                            data-name="{{ $struktur->nama }}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    <form id="delete-form-{{ $struktur->id }}" 
                                                          action="{{ route('struktur-organisasi.destroy', $struktur->id) }}" 
                                                          method="POST" 
                                                          class="d-none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">Belum ada data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
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
    
    .swal2-popup {
        font-size: 0.9rem !important;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Tangani klik tombol delete
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const id = this.dataset.id;
            const name = this.dataset.name;
            
            Swal.fire({
                title: 'Apakah Anda yakin?',
                html: `Anda akan menghapus data <strong>${name}</strong><br>Tindakan ini tidak dapat dibatalkan!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika user mengkonfirmasi, submit form delete
                    document.getElementById(`delete-form-${id}`).submit();
                }
            });
        });
    });

    // Tampilkan alert sukses jika ada
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            timer: 1500,
            showConfirmButton: false
        });
    @endif
});
</script>
@endpush 
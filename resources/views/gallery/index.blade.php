@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <div class="news-content-box">
                <div class="news-header-wrapper">
                    <h1 class="news-content-title">Kelola Galeri</h1>
                    <a href="{{ route('gallery.create') }}" class="news-btn-add">
                        <i class="fas fa-plus"></i>
                        Tambah Galeri
                    </a>
                </div>

                <div class="gallery-grid">
                    @forelse($galleries as $gallery)
                        <div class="gallery-item">
                            <div class="gallery-image">
                                <img src="{{ asset('storage/' . $gallery->image) }}" 
                                     alt="{{ $gallery->title }}">
                            </div>
                            <div class="gallery-content">
                                <h3>{{ $gallery->title }}</h3>
                                <p class="gallery-description">{{ Str::limit($gallery->description, 100) }}</p>
                                <div class="gallery-actions">
                                    <a href="{{ route('gallery.edit', $gallery->id) }}" 
                                       class="gallery-btn-edit"
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            class="gallery-btn-delete" 
                                            onclick="confirmDelete({{ $gallery->id }})"
                                            title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <form id="delete-form-{{ $gallery->id }}" 
                                          action="{{ route('gallery.destroy', $gallery->id) }}" 
                                          method="POST" 
                                          style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="no-data">Belum ada data galeri</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .news-main-content {
        display: flex;
        min-height: 100vh;
        background: #f5f7fb;
        width: 100%;
    }

    .news-content-wrapper {
        flex: 1;
        padding: 20px;
    }

    .news-content-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .news-content-box {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        padding: 30px;
    }

    .news-header-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .news-content-title {
        font-size: 24px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .news-btn-add {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #006400;
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .news-btn-add:hover {
        background: #005000;
        color: white;
        text-decoration: none;
        transform: translateY(-2px);
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 25px;
        padding: 20px 0;
    }

    .gallery-item {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
    }

    .gallery-image {
        position: relative;
        padding-top: 66.67%;
        overflow: hidden;
    }

    .gallery-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-content {
        padding: 20px;
    }

    .gallery-content h3 {
        font-size: 18px;
        font-weight: 600;
        margin: 0 0 10px;
        color: #333;
    }

    .gallery-description {
        color: #666;
        font-size: 14px;
        margin-bottom: 15px;
        line-height: 1.5;
    }

    .gallery-actions {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
        padding-top: 10px;
        border-top: 1px solid #eee;
    }

    .gallery-btn-edit,
    .gallery-btn-delete {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .gallery-btn-edit {
        background-color: #ffc107;
        color: #000;
    }

    .gallery-btn-edit:hover {
        background-color: #ffca2c;
        transform: translateY(-2px);
    }

    .gallery-btn-delete {
        background-color: #dc3545;
        color: white;
    }

    .gallery-btn-delete:hover {
        background-color: #bb2d3b;
        transform: translateY(-2px);
    }

    .no-data {
        grid-column: 1 / -1;
        text-align: center;
        padding: 40px;
        color: #666;
        background: #f8f9fa;
        border-radius: 8px;
    }

    @media (max-width: 768px) {
        .news-content-wrapper {
            padding: 10px;
        }

        .news-content-box {
            padding: 20px;
        }

        .news-header-wrapper {
            flex-direction: column;
            gap: 15px;
            align-items: stretch;
        }

        .news-btn-add {
            text-align: center;
        }

        .gallery-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(galleryId) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Gambar akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + galleryId).submit();
        }
    });
}

@if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        timer: 3000,
        showConfirmButton: false
    });
@endif
</script>
@endpush
@endsection 
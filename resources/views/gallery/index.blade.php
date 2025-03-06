@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <!-- Gallery Section -->
            <div class="news-content-box mb-4">
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

            <!-- Video Section -->
            <div class="news-content-box">
                <div class="news-header-wrapper">
                    <h1 class="news-content-title">Kelola Video</h1>
                    <button class="news-btn-add" data-bs-toggle="modal" data-bs-target="#addVideoModal">
                        <i class="fas fa-plus"></i>
                        Tambah Video
                    </button>
                </div>

                <div class="video-table-wrapper">
                    <table class="video-table">
                        <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Judul Video</th>
                                <th>URL YouTube</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($videos as $video)
                                <tr>
                                    <td class="video-thumbnail-cell">
                                        <div class="video-thumbnail-wrapper">
                                            <img src="https://img.youtube.com/vi/{{ $video->youtube_id }}/mqdefault.jpg" 
                                                 alt="{{ $video->title }}"
                                                 onerror="this.src='https://img.youtube.com/vi/{{ $video->youtube_id }}/0.jpg'">
                                        </div>
                                    </td>
                                    <td>
                                        <h3 class="video-title">{{ $video->title ?: 'Untitled Video' }}</h3>
                                    </td>
                                    <td>
                                        <a href="{{ $video->youtube_url }}" target="_blank" class="text-primary">
                                            Lihat Video
                                            <i class="fas fa-external-link-alt ms-1"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="video-actions">
                                            <button class="video-btn-delete" 
                                                    onclick="confirmDeleteVideo({{ $video->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <form id="delete-video-form-{{ $video->id }}" 
                                                  action="{{ route('gallery.destroyVideo', $video->id) }}" 
                                                  method="POST" 
                                                  style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4">
                                        <div class="no-data">Belum ada video</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Video Modal -->
<div class="modal fade" id="addVideoModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('gallery.storeVideo') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">URL YouTube</label>
                        <input type="url" class="form-control @error('youtube_url') is-invalid @enderror" 
                               name="youtube_url" required value="{{ old('youtube_url') }}"
                               placeholder="https://www.youtube.com/watch?v=...">
                        @error('youtube_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Masukkan URL video YouTube</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .news-main-content {
        display: flex;
        min-height: 100vh;
        background: #f5f7fb;
        width: 100%;
        position: relative;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        overflow-y: auto;
        z-index: 100;
    }

    .news-content-wrapper {
        flex: 1;
        padding: 20px;
        margin-left: 250px;
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

    /* Tambahkan style untuk tabel video */
    .video-table-wrapper {
        overflow-x: auto;
        margin-top: 20px;
    }

    .video-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 8px;
        overflow: hidden;
    }

    .video-table th,
    .video-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #eee;
    }

    .video-table th {
        background: #f8f9fa;
        font-weight: 600;
        color: #333;
    }

    .video-table td {
        vertical-align: middle;
    }

    .video-thumbnail-cell {
        width: 200px;
    }

    .video-thumbnail-wrapper {
        position: relative;
        width: 180px;
        height: 100px;
        border-radius: 6px;
        overflow: hidden;
    }

    .video-thumbnail-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .video-title {
        font-weight: 500;
        color: #333;
        margin-bottom: 5px;
    }

    .video-description {
        color: #666;
        font-size: 14px;
    }

    .video-actions {
        display: flex;
        gap: 8px;
    }

    .video-btn-edit,
    .video-btn-delete {
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .video-btn-edit {
        background: #ffc107;
        color: #000;
    }

    .video-btn-delete {
        background: #dc3545;
        color: white;
    }

    .video-btn-edit:hover,
    .video-btn-delete:hover {
        transform: translateY(-2px);
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

function confirmDeleteVideo(videoId) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Video akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-video-form-' + videoId).submit();
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
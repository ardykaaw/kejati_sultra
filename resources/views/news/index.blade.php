@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <div class="news-content-box">
                <div class="news-header-wrapper">
                    <h1 class="news-content-title">Kelola Berita</h1>
                    <a href="{{ route('news.create') }}" class="news-btn-add">
                        <i class="fas fa-plus"></i>
                        Tambah Berita
                    </a>
                </div>

                <div class="news-table-container">
                    <table class="news-content-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Deskripsi Singkat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($news as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $item->thumbnail) }}" 
                                             alt="Thumbnail" 
                                             class="news-thumbnail">
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ Str::limit($item->short_description, 100) }}</td>
                                    <td>
                                        <div class="news-action-buttons">
                                            <a href="{{ route('news.edit', $item->id) }}" 
                                               class="news-btn-edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="news-btn-delete" 
                                                    onclick="confirmDelete({{ $item->id }})"
                                                    title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            
                                            <form id="delete-form-{{ $item->id }}" 
                                                  action="{{ route('news.destroy', $item->id) }}" 
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
                                    <td colspan="5" class="text-center">Tidak ada data berita</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
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
        position: relative;
        justify-content: center;
        align-items: center;
    }

    .news-content-wrapper {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 20px;
    }

    .news-content-container {
        width: 100%;
        max-width: 1200px;
    }

    .news-content-box {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        padding: 30px;
        width: 100%;
        transition: all 0.3s ease-in-out;
    }

    .news-content-box:hover {
        box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }

    .news-header-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .news-content-title {
        font-size: 26px;
        font-weight: 600;
        color: #333;
    }

    .news-btn-add {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: #006400;
        color: white;
        padding: 10px 18px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
        transition: background-color 0.3s;
    }

    .news-btn-add:hover {
        background-color: #005000;
    }

    .news-table-container {
        margin-top: 20px;
        width: 100%;
        overflow-x: auto;
    }

    .news-content-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 8px;
        overflow: hidden;
    }

    .news-content-table th {
        background: #f8f9fa;
        padding: 14px 20px;
        text-align: left;
        font-weight: 600;
        color: #333;
        border-bottom: 2px solid #e9ecef;
    }

    .news-content-table td {
        padding: 14px 20px;
        border-bottom: 1px solid #e9ecef;
        vertical-align: middle;
    }

    .news-content-table tr:last-child td {
        border-bottom: none;
    }

    .news-thumbnail {
        width: 80px;
        height: 50px;
        object-fit: cover;
        border-radius: 6px;
    }

    .news-action-buttons {
        display: flex;
        gap: 10px;
    }

    .news-btn-edit,
    .news-btn-delete {
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

    .news-btn-edit {
        background-color: #ffc107;
        color: #000;
    }

    .news-btn-edit:hover {
        background-color: #ffca2c;
    }

    .news-btn-delete {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        background-color: #dc3545;
        color: white;
    }

    .news-btn-delete:hover {
        background-color: #bb2d3b;
        transform: translateY(-1px);
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
            justify-content: center;
        }
    }
</style>

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(newsId) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data berita akan dihapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + newsId).submit();
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

@if(session('error'))
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('error') }}'
    });
@endif
</script>
@endpush
@endsection
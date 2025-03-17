@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <div class="news-content-box">
                <div class="news-header-wrapper">
                    <h1 class="news-content-title">Kelola Berita</h1>
                    <div class="news-header-actions">
                        <!-- Search Form -->
                        <form action="{{ route('news.index') }}" method="GET" class="news-search-form">
                            <div class="search-input-group">
                                <input type="text" 
                                       name="search" 
                                       placeholder="Cari berita..." 
                                       value="{{ request('search') }}"
                                       class="news-search-input">
                                <button type="submit" class="news-search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <a href="{{ route('news.create') }}" class="news-btn-add">
                            <i class="fas fa-plus"></i>
                            Tambah Berita
                        </a>
                    </div>
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

                <!-- Pagination -->
                <div class="news-pagination-container">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <!-- Previous Page Link -->
                            @if ($news->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">« Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $news->previousPageUrl() }}">« Previous</a>
                                </li>
                            @endif

                            <!-- Pagination Elements -->
                            @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $news->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            <!-- Next Page Link -->
                            @if ($news->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $news->nextPageUrl() }}">Next »</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">Next »</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                    <div class="news-pagination-info">
                        Showing <span>{{ $news->firstItem() ?? 0 }}</span> 
                        to <span>{{ $news->lastItem() ?? 0 }}</span> 
                        of <span>{{ $news->total() }}</span> entries
                    </div>
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
    }

    .news-content-wrapper {
        flex: 1;
        padding: 20px;
        margin-left: 250px;
    }

    .news-content-container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
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

    /* Search Styles */
    .news-header-actions {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .news-search-form {
        flex: 1;
        max-width: 400px;
    }

    .search-input-group {
        display: flex;
        position: relative;
    }

    .news-search-input {
        width: 100%;
        padding: 10px 40px 10px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .news-search-input:focus {
        border-color: #006400;
        box-shadow: 0 0 0 2px rgba(0, 100, 0, 0.1);
        outline: none;
    }

    .news-search-btn {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        padding: 0 15px;
        background: transparent;
        border: none;
        color: #666;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .news-search-btn:hover {
        color: #006400;
    }

    /* Updated Pagination Styles */
    .news-pagination-container {
        margin-top: 30px;
        text-align: center;
    }

    .pagination {
        display: inline-flex;
        align-items: center;
        background: #fff;
        padding: 5px;
        margin: 0;
        list-style: none;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .page-item {
        margin: 0 2px;
    }

    /* Previous/Next buttons */
    .page-item:first-child .page-link,
    .page-item:last-child .page-link {
        font-weight: 500;
        padding: 8px 15px;
        color: #006400;
        min-width: auto;
        border-radius: 6px;
    }

    /* Numbers */
    .page-link {
        border: none;
        padding: 8px 12px;
        color: #006400;
        background: transparent;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.2s ease;
        border-radius: 6px;
        min-width: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Active state */
    .page-item.active .page-link {
        background-color: #006400;
        color: white;
        box-shadow: 0 2px 5px rgba(0, 100, 0, 0.2);
    }

    /* Hover state */
    .page-link:hover:not(.disabled) {
        background-color: #e8f5e8;
        color: #006400;
    }

    /* Disabled state */
    .page-item.disabled .page-link {
        color: #aaa;
        pointer-events: none;
        background: transparent;
    }

    /* Pagination info text */
    .news-pagination-info {
        margin-top: 15px;
        color: #666;
        font-size: 14px;
    }

    .news-pagination-info span {
        color: #006400;
        font-weight: 500;
    }

    /* Tambahkan styling untuk sidebar */
    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        width: 250px;
        height: 100vh;
        background: #fff;
        box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        z-index: 1000;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .news-content-wrapper {
            margin-left: 0;
            padding: 10px;
        }

        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .sidebar.active {
            transform: translateX(0);
        }

        .news-header-actions {
            flex-direction: column;
            width: 100%;
        }

        .news-search-form {
            width: 100%;
            max-width: none;
        }

        .news-btn-add {
            width: 100%;
        }

        .pagination {
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
            padding: 8px;
        }

        .page-link {
            padding: 6px 10px;
            min-width: 32px;
        }

        .page-item:first-child .page-link,
        .page-item:last-child .page-link {
            padding: 6px 12px;
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
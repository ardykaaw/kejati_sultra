@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <div class="news-content-box">
                <div class="news-header-wrapper">
                    <h1 class="news-content-title">Tambah Berita Baru</h1>
                </div>

                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="news-form-group">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" 
                               id="thumbnail" name="thumbnail">
                        @error('thumbnail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="short_description" class="form-label">Deskripsi Singkat</label>
                        <textarea class="form-control @error('short_description') is-invalid @enderror" 
                                  id="short_description" name="short_description" rows="3">{{ old('short_description') }}</textarea>
                        @error('short_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="content" class="form-label">Isi Berita</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" rows="10">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-actions">
                        <button type="submit" class="news-btn-submit">Simpan</button>
                        <a href="{{ route('news.index') }}" class="news-btn-cancel">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Menggunakan style yang sama dengan index */
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

    .news-header-wrapper {
        margin-bottom: 30px;
    }

    .news-content-title {
        font-size: 26px;
        font-weight: 600;
        color: #333;
    }

    /* Style khusus untuk form */
    .news-form-group {
        margin-bottom: 20px;
    }

    .news-form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        font-size: 14px;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #006400;
        box-shadow: 0 0 0 0.2rem rgba(0, 100, 0, 0.25);
        outline: none;
    }

    .is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 13px;
        margin-top: 4px;
    }

    .news-form-actions {
        display: flex;
        gap: 12px;
        margin-top: 30px;
    }

    .news-btn-submit {
        background-color: #006400;
        color: white;
        padding: 10px 24px;
        border: none;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .news-btn-submit:hover {
        background-color: #005000;
    }

    .news-btn-cancel {
        background-color: #6c757d;
        color: white;
        padding: 10px 24px;
        border: none;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .news-btn-cancel:hover {
        background-color: #5a6268;
        color: white;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .news-content-wrapper {
            padding: 10px;
        }

        .news-content-box {
            padding: 20px;
        }

        .news-form-actions {
            flex-direction: column;
        }

        .news-btn-submit,
        .news-btn-cancel {
            width: 100%;
            text-align: center;
        }
    }
</style>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
@endsection 
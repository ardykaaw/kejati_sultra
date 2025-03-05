@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <div class="news-content-box">
                <div class="news-header-wrapper">
                    <h1 class="news-content-title">Edit Berita</h1>
                </div>

                <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="news-form-group">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $news->title) }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="thumbnail" class="form-label">Thumbnail</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" 
                               id="thumbnail" name="thumbnail">
                        @if($news->thumbnail)
                            <div class="news-current-thumbnail">
                                <img src="{{ asset('storage/' . $news->thumbnail) }}" 
                                     alt="Current Thumbnail">
                            </div>
                        @endif
                        @error('thumbnail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="short_description" class="form-label">Deskripsi Singkat</label>
                        <textarea class="form-control @error('short_description') is-invalid @enderror" 
                                  id="short_description" name="short_description" rows="3">{{ old('short_description', $news->short_description) }}</textarea>
                        @error('short_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="content" class="form-label">Isi Berita</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" rows="10">{{ old('content', $news->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-actions">
                        <button type="submit" class="news-btn-submit">Update</button>
                        <a href="{{ route('news.index') }}" class="news-btn-cancel">Kembali</a>
                    </div>
                </form>
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
        margin-bottom: 30px;
    }

    .news-content-title {
        font-size: 24px;
        font-weight: 600;
        color: #333;
    }

    .news-form-group {
        margin-bottom: 25px;
    }

    .news-form-group label {
        display: block;
        font-weight: 500;
        margin-bottom: 8px;
        color: #444;
    }

    .form-control {
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #006400;
        box-shadow: 0 0 0 0.2rem rgba(0,100,0,0.15);
    }

    .news-current-thumbnail {
        margin-top: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        display: inline-block;
    }

    .news-current-thumbnail img {
        max-width: 200px;
        border-radius: 4px;
    }

    .news-form-actions {
        display: flex;
        gap: 15px;
        margin-top: 30px;
    }

    .news-btn-submit {
        background: #006400;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .news-btn-submit:hover {
        background: #005000;
        transform: translateY(-1px);
    }

    .news-btn-cancel {
        background: #6c757d;
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .news-btn-cancel:hover {
        background: #5a6268;
        color: white;
        text-decoration: none;
        transform: translateY(-1px);
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
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
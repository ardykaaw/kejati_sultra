@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <div class="news-content-box">
                <div class="news-header-wrapper">
                    <h1 class="news-content-title">Edit Galeri</h1>
                </div>

                <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="news-form-group">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $gallery->title) }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image">
                        @if($gallery->image)
                            <div class="current-image">
                                <img src="{{ asset('storage/' . $gallery->image) }}" 
                                     alt="Current Image">
                            </div>
                        @endif
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="4">{{ old('description', $gallery->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="news-form-actions">
                        <button type="submit" class="news-btn-submit">Update</button>
                        <a href="{{ route('gallery.index') }}" class="news-btn-cancel">Kembali</a>
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
        max-width: 800px;
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
        margin: 0;
    }

    .news-form-group {
        margin-bottom: 25px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #444;
    }

    .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #006400;
        box-shadow: 0 0 0 0.2rem rgba(0,100,0,0.15);
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
    }

    .current-image {
        margin: 15px 0;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        display: inline-block;
        background: #f8f9fa;
    }

    .current-image img {
        max-width: 300px;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
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
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .news-btn-submit:hover {
        background: #005000;
        transform: translateY(-2px);
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
        transform: translateY(-2px);
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

        .current-image img {
            max-width: 100%;
        }
    }
</style>

@push('scripts')
<script>
document.getElementById('image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.querySelector('.current-image img');
            if (preview) {
                preview.src = e.target.result;
            } else {
                const newPreview = document.createElement('div');
                newPreview.className = 'current-image';
                newPreview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                document.querySelector('.news-form-group').appendChild(newPreview);
            }
        }
        reader.readAsDataURL(file);
    }
});
</script>
@endpush
@endsection 
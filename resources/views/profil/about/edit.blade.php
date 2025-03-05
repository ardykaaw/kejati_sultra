@extends('layouts.app')

@section('content')
<div class="wrapper d-flex align-items-stretch">
    @include('components.sidebar')
    
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Edit Konten Tentang Kami</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                @if($about->image)
                                <div class="current-image mb-3">
                                    <img src="{{ asset('storage/' . $about->image) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px">
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="image">Gambar Header</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="content">Konten</label>
                                    <textarea class="form-control" id="editor" name="content" rows="10">{{ $about->content }}</textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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
    .ck-editor__editable {
        min-height: 300px;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'mediaEmbed', '|', 'undo', 'redo']
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Edit Struktur Organisasi</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('struktur-organisasi.update', $strukturOrganisasi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" id="content" name="content" rows="10">{{ $strukturOrganisasi->content }}</textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="image">Gambar Struktur Organisasi</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if($strukturOrganisasi->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'.$strukturOrganisasi->image) }}" alt="Struktur Organisasi" class="img-fluid" style="max-height: 200px;">
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
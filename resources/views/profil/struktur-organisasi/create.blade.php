@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Tambah Struktur Organisasi</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('struktur-organisasi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="image">Gambar Struktur Organisasi</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
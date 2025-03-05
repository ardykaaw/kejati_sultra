@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Tambah Konten Tentang Kami</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('about.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
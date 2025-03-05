@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Edit Tri Krama Adhyaksa</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('tri-krama.update', $triKrama->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" id="content" name="content" rows="10">{{ $triKrama->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
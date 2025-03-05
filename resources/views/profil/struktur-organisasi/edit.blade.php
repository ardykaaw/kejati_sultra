@extends('layouts.app')

@section('content')
<div class="wrapper d-flex align-items-stretch">
    @include('components.sidebar')
    
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb -->
            <div class="content-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Profil</li>
                        <li class="breadcrumb-item"><a href="{{ route('struktur-organisasi.index') }}">Struktur Organisasi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Edit Anggota Struktur Organisasi</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('struktur-organisasi.update', $strukturOrganisasi->id) }}" 
                                  method="POST" 
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" 
                                           class="form-control @error('nama') is-invalid @enderror" 
                                           id="nama" 
                                           name="nama" 
                                           value="{{ old('nama', $strukturOrganisasi->nama) }}" 
                                           required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" 
                                           class="form-control @error('jabatan') is-invalid @enderror" 
                                           id="jabatan" 
                                           name="jabatan" 
                                           value="{{ old('jabatan', $strukturOrganisasi->jabatan) }}" 
                                           required>
                                    @error('jabatan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="urutan">Urutan</label>
                                    <input type="number" 
                                           class="form-control @error('urutan') is-invalid @enderror" 
                                           id="urutan" 
                                           name="urutan" 
                                           value="{{ old('urutan', $strukturOrganisasi->urutan) }}" 
                                           required>
                                    <small class="text-muted">Urutan menentukan posisi dalam struktur (1: Teratas)</small>
                                    @error('urutan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" 
                                           class="form-control @error('foto') is-invalid @enderror" 
                                           id="foto" 
                                           name="foto" 
                                           accept="image/*">
                                    <small class="text-muted">Format: JPG, JPEG, PNG (Max. 2MB). Biarkan kosong jika tidak ingin mengubah foto</small>
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    @if($strukturOrganisasi->foto)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/'.$strukturOrganisasi->foto) }}" 
                                                 alt="{{ $strukturOrganisasi->nama }}" 
                                                 class="img-thumbnail"
                                                 style="max-height: 200px;">
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="facebook">Facebook URL (Opsional)</label>
                                    <input type="url" 
                                           class="form-control @error('facebook') is-invalid @enderror" 
                                           id="facebook" 
                                           name="facebook" 
                                           value="{{ old('facebook', $strukturOrganisasi->facebook) }}">
                                    @error('facebook')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="twitter">Twitter URL (Opsional)</label>
                                    <input type="url" 
                                           class="form-control @error('twitter') is-invalid @enderror" 
                                           id="twitter" 
                                           name="twitter" 
                                           value="{{ old('twitter', $strukturOrganisasi->twitter) }}">
                                    @error('twitter')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="instagram">Instagram URL (Opsional)</label>
                                    <input type="url" 
                                           class="form-control @error('instagram') is-invalid @enderror" 
                                           id="instagram" 
                                           name="instagram" 
                                           value="{{ old('instagram', $strukturOrganisasi->instagram) }}">
                                    @error('instagram')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">LinkedIn URL (Opsional)</label>
                                    <input type="url" 
                                           class="form-control @error('linkedin') is-invalid @enderror" 
                                           id="linkedin" 
                                           name="linkedin" 
                                           value="{{ old('linkedin', $strukturOrganisasi->linkedin) }}">
                                    @error('linkedin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('struktur-organisasi.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
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
    .btn-primary {
        background-color: #006400;
        border-color: #006400;
    }
    
    .btn-primary:hover {
        background-color: #005000;
        border-color: #005000;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .invalid-feedback {
        display: block;
    }
</style>
@endpush 
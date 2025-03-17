@extends('layouts.app')

@section('content')
<div class="news-main-content">
    @include('components.sidebar')
    
    <div class="news-content-wrapper">
        <div class="news-content-container">
            <div class="news-content-box">
                <!-- Breadcrumb -->
                <div class="content-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Aduan Masyarakat</li>
                        </ol>
                    </nav>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card main-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title text-dark">Daftar Aduan Masyarakat</h3>
                                    <div class="card-tools">
                                        <div class="input-group">
                                            <input type="text" id="searchInput" class="form-control" placeholder="Cari aduan...">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fas fa-search"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="complaintsTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No. Telepon</th>
                                                <th>Pesan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($complaints as $complaint)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $complaint->created_at->format('d/m/Y H:i') }}</td>
                                                <td>{{ $complaint->name }}</td>
                                                <td>{{ $complaint->email }}</td>
                                                <td>{{ $complaint->phone }}</td>
                                                <td>
                                                    <div class="message-preview">
                                                        {{ Str::limit($complaint->message, 50) }}
                                                        @if(strlen($complaint->message) > 50)
                                                            <button type="button" 
                                                                    class="btn btn-link btn-sm text-primary"
                                                                    data-bs-toggle="modal" 
                                                                    data-bs-target="#messageModal-{{ $complaint->id }}">
                                                                Lihat Detail
                                                            </button>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-{{ $complaint->status == 'pending' ? 'warning' : ($complaint->status == 'process' ? 'info' : 'success') }}">
                                                        {{ ucfirst($complaint->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <form action="{{ route('complaints.updateStatus', $complaint->id) }}" 
                                                          method="POST" 
                                                          class="d-inline">
                                                        @csrf
                                                        @method('PUT')
                                                        <select name="status" 
                                                                class="form-select form-select-sm status-select" 
                                                                onchange="this.form.submit()">
                                                            <option value="pending" {{ $complaint->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                            <option value="process" {{ $complaint->status == 'process' ? 'selected' : '' }}>Proses</option>
                                                            <option value="done" {{ $complaint->status == 'done' ? 'selected' : '' }}>Selesai</option>
                                                        </select>
                                                    </form>
                                                </td>
                                            </tr>

                                            <!-- Modal Detail Aduan -->
                                            <div class="modal fade" id="messageModal-{{ $complaint->id }}" tabindex="-1">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Aduan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="complaint-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-md-6">
                                                                        <p><strong>Nama:</strong> {{ $complaint->name }}</p>
                                                                        <p><strong>Email:</strong> {{ $complaint->email }}</p>
                                                                        <p><strong>No. Telepon:</strong> {{ $complaint->phone }}</p>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <p><strong>Tanggal:</strong> {{ $complaint->created_at->format('d/m/Y H:i') }}</p>
                                                                        <p><strong>Status:</strong> 
                                                                            <span class="badge bg-{{ $complaint->status == 'pending' ? 'warning' : ($complaint->status == 'process' ? 'info' : 'success') }}">
                                                                                {{ ucfirst($complaint->status) }}
                                                                            </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="message-content">
                                                                    <h6 class="mb-3">Isi Aduan:</h6>
                                                                    <div class="message-box">
                                                                        {{ $complaint->message }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
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

    /* Content Wrapper */
    .content-wrapper {
        margin-left: 250px; /* Sesuaikan dengan lebar sidebar yang sudah ada */
        padding: 20px;
        min-height: 100vh;
        background: #f4f6f9;
        width: calc(100% - 250px);
        position: relative;
        z-index: 1; /* Pastikan content berada di belakang sidebar */
    }

    /* Wrapper utama */
    .wrapper {
        min-height: 100vh;
        display: flex;
        position: relative;
        overflow-x: hidden; /* Mencegah scroll horizontal */
    }

    /* Card Styling */
    .main-card {
        margin-top: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        background: white;
    }

    .card-header {
        background: linear-gradient(135deg, #006400, #004d2a);
        color: white;
        padding: 15px 20px;
        border-radius: 8px 8px 0 0;
    }

    .card-title {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 600;
    }

    /* Table Styling */
    .table {
        margin-bottom: 0;
    }

    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
    }

    .table td {
        vertical-align: middle;
    }

    /* Badge Styling */
    .badge {
        padding: 8px 12px;
        border-radius: 4px;
        font-weight: 500;
    }

    /* Status Select Styling */
    .status-select {
        padding: 4px 8px;
        border-radius: 4px;
        border: 1px solid #ced4da;
        background-color: white;
        font-size: 0.875rem;
    }

    /* Search Input Styling */
    .input-group {
        width: 250px;
    }

    /* Modal Styling */
    .complaint-details p {
        margin-bottom: 0.5rem;
    }

    .complaint-message {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 4px;
        margin-top: 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .news-content-wrapper {
            padding: 10px;
        }

        .news-content-box {
            padding: 20px;
        }

        .news-header-wrapper {
            flex-direction: column;
            gap: 15px;
            align-items: stretch;
        }

        .content-wrapper {
            margin-left: 0;
            width: 100%;
        }
    }

    .message-preview {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .btn-link {
        padding: 0;
        text-decoration: none;
    }

    .btn-link:hover {
        text-decoration: underline;
    }

    .message-box {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        white-space: pre-wrap;
        max-height: 300px;
        overflow-y: auto;
    }

    .complaint-details {
        padding: 15px;
    }

    .modal-body {
        max-height: 80vh;
        overflow-y: auto;
    }

    .badge {
        font-weight: 500;
        padding: 6px 10px;
    }
</style>
@endpush

@push('scripts')
<script>
    // Search functionality
    $(document).ready(function() {
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#complaintsTable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endpush
@endsection 
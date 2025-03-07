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
                        <li class="breadcrumb-item active" aria-current="page">Aduan Masyarakat</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card main-card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title" style="color: black;">Daftar Aduan Masyarakat</h3>
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
                                                <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#messageModal{{ $complaint->id }}">
                                                    {{ Str::limit($complaint->message, 50) }}
                                                </button>
                                            </td>
                                            <td>
                                                <span class="badge bg-{{ $complaint->status == 'pending' ? 'warning' : ($complaint->status == 'process' ? 'info' : 'success') }}">
                                                    {{ ucfirst($complaint->status) }}
                                                </span>
                                            </td>
                                            <td>
                                                <form action="{{ route('complaints.updateStatus', $complaint->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <select name="status" class="form-select form-select-sm status-select" onchange="this.form.submit()">
                                                        <option value="pending" {{ $complaint->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="process" {{ $complaint->status == 'process' ? 'selected' : '' }}>Proses</option>
                                                        <option value="done" {{ $complaint->status == 'done' ? 'selected' : '' }}>Selesai</option>
                                                    </select>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Message Modal -->
                                        <div class="modal fade" id="messageModal{{ $complaint->id }}" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="messageModalLabel">Detail Aduan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="complaint-details">
                                                            <p><strong>Nama:</strong> {{ $complaint->name }}</p>
                                                            <p><strong>Email:</strong> {{ $complaint->email }}</p>
                                                            <p><strong>No. Telepon:</strong> {{ $complaint->phone }}</p>
                                                            <p><strong>Tanggal:</strong> {{ $complaint->created_at->format('d/m/Y H:i') }}</p>
                                                            <p><strong>Status:</strong> {{ ucfirst($complaint->status) }}</p>
                                                            <hr>
                                                            <p><strong>Isi Aduan:</strong></p>
                                                            <p class="complaint-message">{{ $complaint->message }}</p>
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

@push('styles')
<style>
    /* Sidebar Fix */
    #sidebar {
        position: fixed;
        height: 100vh;
        overflow-y: auto;
    }

    /* Content Wrapper */
    .content-wrapper {
        margin-left: 250px;
        padding: 20px;
        min-height: 100vh;
        background: #f4f6f9;
    }

    /* Card Styling */
    .main-card {
        margin-top: 20px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
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

    /* Responsive */
    @media (max-width: 768px) {
        .content-wrapper {
            margin-left: 0;
        }

        .input-group {
            width: 100%;
            margin-top: 10px;
        }

        .card-header {
            flex-direction: column;
        }

        .card-tools {
            margin-top: 10px;
            width: 100%;
        }
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
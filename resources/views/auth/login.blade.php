<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kejaksaan Tinggi</title>
    <link href="{{ asset('img/logo/kejaksaanri.png') }}" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .card-header {
            background: linear-gradient(120deg, #006838, #004d2a);
            border-bottom: none;
            padding: 30px 20px;
            text-align: center;
            color: white;
        }
        .card-body {
            padding: 40px 30px;
            background: white;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 2px solid #e9ecef;
            transition: all 0.3s;
            font-size: 15px;
        }
        .form-control:focus {
            border-color: #006838;
            box-shadow: 0 0 0 0.2rem rgba(0, 104, 56, 0.1);
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            background: #006838;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
            font-size: 16px;
        }
        .btn-primary:hover {
            background: #008a4c;
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(0,104,56,0.2);
        }
        .input-group-text {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-right: none;
            border-radius: 8px 0 0 8px;
            color: #006838;
        }
        .input-group .form-control {
            border-left: none;
            border-radius: 0 8px 8px 0;
        }
        .alert {
            border-radius: 8px;
            border: none;
        }
        .brand-logo {
            text-align: center;
            margin-bottom: 10px;
        }
        .brand-logo img {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
            filter: brightness(0) invert(1);
        }
        .login-title {
            color: white;
            font-size: 18px;
            font-weight: 600;
            margin-top: 10px;
            letter-spacing: 1px;
        }
        .form-label {
            color: #495057;
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .form-check-input:checked {
            background-color: #006838;
            border-color: #006838;
        }
        .form-check-label {
            color: #6c757d;
            font-size: 14px;
        }
        .subtitle {
            color: rgba(255,255,255,0.9);
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="brand-logo">
                            <img src="{{ asset('img/logo/kejaksaanri.png') }}" alt="Logo Kejaksaan RI">
                            <div class="login-title">KEJAKSAAN TINGGI</div>
                            <div class="subtitle">SULAWESI TENGGARA</div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email anda">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password anda">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Ingat saya</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i>Masuk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
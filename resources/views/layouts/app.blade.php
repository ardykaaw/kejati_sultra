<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kejaksaan Tinggi Sulawesi Tenggara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @stack('styles')
    <style>
        .wrapper {
            min-height: 100vh;
        }

        .content-wrapper {
            flex: 1;
            padding: 25px;
            background: #f4f6f9;
        }

        .card {
            box-shadow: 0 0 15px rgba(0,0,0,.05);
            border: none;
            margin-bottom: 1rem;
        }

        .card-header {
            background: white;
            border-bottom: 1px solid rgba(0,0,0,.05);
            padding: 15px 20px;
        }

        .card-body {
            padding: 20px;
        }

        /* Style untuk konten */
        .content-text {
            line-height: 1.8;
            color: #444;
        }

        .content-text h1, 
        .content-text h2, 
        .content-text h3 {
            color: #006400;
            margin-bottom: 1rem;
        }

        .content-text p {
            margin-bottom: 1rem;
        }

        /* Style untuk breadcrumb */
        .content-header {
            margin-bottom: 20px;
        }

        .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-item {
            color: #666;
        }

        .breadcrumb-item.active {
            color: #006400;
        }
    </style>
</head>
<body>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html> 
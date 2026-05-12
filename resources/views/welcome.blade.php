<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BayUniversity - Sistem Informasi Akademik</title>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .navbar-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .hero {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin-top: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .card-menu {
            transition: transform 0.3s;
            cursor: pointer;
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        .card-menu:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .footer {
            background: white;
            margin-top: 50px;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand text-white fw-bold fs-4" href="/">
                <i class="bi bi-building"></i> BayUniversity
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="/"><i class="bi bi-house"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/jurusan"><i class="bi bi-book"></i> Jurusan</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/kelas"><i class="bi bi-building"></i> Kelas</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/mahasiswa"><i class="bi bi-people"></i> Mahasiswa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container">
        <div class="hero text-center">
            <h1 class="display-4 fw-bold" style="color: #764ba2;">Selamat Datang di BayUniversity</h1>
            <p class="lead text-secondary">Sistem Informasi Akademik Terintegrasi</p>
            <p class="mb-4">Kelola data Jurusan, Kelas, dan Mahasiswa dengan mudah dan cepat.</p>
            <a href="/mahasiswa" class="btn btn-primary btn-lg px-4 me-2">
                <i class="bi bi-people"></i> Data Mahasiswa
            </a>
            <a href="/jurusan" class="btn btn-outline-secondary btn-lg px-4">
                <i class="bi bi-book"></i> Data Jurusan
            </a>
        </div>

        <!-- Menu Card -->
        <div class="row mt-5 g-4">
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/jurusan'">
                    <i class="bi bi-book display-1 text-primary"></i>
                    <h3 class="mt-3">Jurusan</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data jurusan</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/kelas'">
                    <i class="bi bi-building display-1 text-success"></i>
                    <h3 class="mt-3">Kelas</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data kelas</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/mahasiswa'">
                    <i class="bi bi-people display-1 text-danger"></i>
                    <h3 class="mt-3">Mahasiswa</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data mahasiswa</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p class="mb-0 text-secondary">&copy; 2026 BayUniversity - Sistem Informasi Akademik</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
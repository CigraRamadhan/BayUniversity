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
        .navbar-custom .nav-link:hover {
            transform: translateY(-2px);
            transition: 0.3s;
            text-decoration: underline;
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
        .btn-group-custom {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
    </style>
</head>
<body>

    <!-- Navbar dengan SEMUA MENU -->
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
                    <li class="nav-item"><a class="nav-link text-white" href="/dosen"><i class="bi bi-person-badge"></i> Dosen</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/matkul"><i class="bi bi-journal-bookmark-fill"></i> Matkul</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/jadwal"><i class="bi bi-calendar-week"></i> Jadwal</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container">
        <div class="hero text-center">
            <h1 class="display-4 fw-bold" style="color: #764ba2;">Selamat Datang di BayUniversity</h1>
            <p class="lead text-secondary">Sistem Informasi Akademik Terintegrasi</p>
            <p class="mb-4">Kelola data Jurusan, Kelas, Mahasiswa, Dosen, Mata Kuliah, dan Jadwal dengan mudah.</p>
            <div class="btn-group-custom">
                <a href="/mahasiswa" class="btn btn-primary btn-lg"><i class="bi bi-people"></i> Mahasiswa</a>
                <a href="/jurusan" class="btn btn-outline-secondary btn-lg"><i class="bi bi-book"></i> Jurusan</a>
                <a href="/kelas" class="btn btn-outline-success btn-lg"><i class="bi bi-building"></i> Kelas</a>
                <a href="/dosen" class="btn btn-outline-info btn-lg"><i class="bi bi-person-badge"></i> Dosen</a>
                <a href="/matkul" class="btn btn-outline-warning btn-lg"><i class="bi bi-journal-bookmark-fill"></i> Matkul</a>
                <a href="/jadwal" class="btn btn-outline-danger btn-lg"><i class="bi bi-calendar-week"></i> Jadwal</a>
            </div>
        </div>

        <!-- Menu Card (6 card) -->
        <div class="row mt-5 g-4">
            <!-- Jurusan (Kamu) -->
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/jurusan'">
                    <i class="bi bi-book display-1 text-primary"></i>
                    <h3 class="mt-3">Jurusan</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data jurusan</p>
                </div>
            </div>
            <!-- Kelas (Kamu) -->
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/kelas'">
                    <i class="bi bi-building display-1 text-success"></i>
                    <h3 class="mt-3">Kelas</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data kelas</p>
                </div>
            </div>
            <!-- Mahasiswa (Kamu) -->
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/mahasiswa'">
                    <i class="bi bi-people display-1 text-danger"></i>
                    <h3 class="mt-3">Mahasiswa</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data mahasiswa</p>
                </div>
            </div>
            <!-- Dosen (Teman) -->
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/dosen'">
                    <i class="bi bi-person-badge display-1 text-info"></i>
                    <h3 class="mt-3">Dosen</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data dosen</p>
                </div>
            </div>
            <!-- Mata Kuliah (Teman) -->
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/matkul'">
                    <i class="bi bi-journal-bookmark-fill display-1 text-warning"></i>
                    <h3 class="mt-3">Mata Kuliah</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data mata kuliah</p>
                </div>
            </div>
            <!-- Jadwal (Teman) -->
            <div class="col-md-4">
                <div class="card-menu text-center p-4 bg-white" onclick="location.href='/jadwal'">
                    <i class="bi bi-calendar-week display-1 text-secondary"></i>
                    <h3 class="mt-3">Jadwal</h3>
                    <p class="text-secondary">Tambah, edit, dan hapus data jadwal kuliah</p>
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
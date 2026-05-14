<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kelas - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Edit Kelas</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data kelas di bawah ini.</p>

        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Kode Kelas</label>
                <input type="text" name="kode_kelas" class="form-control" value="{{ old('kode_kelas', $kelas->kode_kelas) }}" required>
                <div class="form-text text-muted">Contoh: IF-1, IF-2, SI-1</div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" value="{{ old('nama_kelas', $kelas->nama_kelas) }}" required>
                <div class="form-text text-muted">Contoh: Informatika Kelas A, Sistem Informasi Kelas B</div>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
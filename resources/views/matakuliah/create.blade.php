<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Tambah Mata Kuliah</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Isi semua field di bawah ini.</p>

        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Kode</label>
                <input type="text" name="kode_matkul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Mata Kuliah</label>
                <input type="text" name="nama_matkul" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">SKS</label>
                <input type="text" name="sks" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Semester</label>
                <input type="text" name="semester" class="form-control"  required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Jurusan</label>
                <input type="text" name="jurusan" class="form-control"  required>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
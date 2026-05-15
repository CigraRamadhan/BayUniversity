<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Tambah Nilai</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Isi semua field di bawah ini.</p>

        <form action="{{ route('nilai.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Mata Kuliah</label>
                <input type="text" name="mata_kuliah" class="form-control" required>
            </div>


            <div class="mb-3">
                <label class="form-label fw-semibold">Tugas</label>
                <input type="text" name="tugas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">uts</label>
                <input type="text" name="uts" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">uas</label>
                <input type="text" name="uas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nilai Akhir</label>
                <input type="text" name="nilai_akhir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Grade</label>
                <input type="text" name="grade" class="form-control" required>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
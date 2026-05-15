<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Edit Nilai</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data nilai sesuai kebutuhan.</p>

        <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama</label>
                <input type="text" name="nama_mahasiswa" class="form-control"
                    value="{{ old('nama_mahasiswa', $nilai->nama_mahasiswa) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Mata Kuliah</label>
                <input type="text" name="mata_kuliah" class="form-control"
                    value="{{ old('mata_kuliah', $nilai->mata_kuliah) }}" required>
            </div>


            <div class="mb-3">
                <label class="form-label fw-semibold">Tugas</label>
                <input type="text" name="tugas" class="form-control" value="{{ old('tugas', $nilai->tugas) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">UTS</label>
                <input type="text" name="uts" class="form-control" value="{{ old('uts', $nilai->uts) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">UAS</label>
                <input type="text" name="uas" class="form-control" value="{{ old('uas', $nilai->uas) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nilai Akhir</label>
                <input type="text" name="nilai_akhir" class="form-control" value="{{ old('nilai_akhir', $nilai->nilai_akhir) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Grade</label>
                <input type="text" name="grade" class="form-control" value="{{ old('grade', $nilai->grade) }}" required>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
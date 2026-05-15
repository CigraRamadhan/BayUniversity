<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">
        <h5 class="mb-1 fw-semibold">Edit Nilai</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data nilai di bawah ini.</p>

        <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Mahasiswa</label>
                <select name="mahasiswa_id" class="form-control" required>
                    @foreach($mahasiswa as $m)
                        <option value="{{ $m->id }}" {{ $nilai->mahasiswa_id == $m->id ? 'selected' : '' }}>
                            {{ $m->nama }} ({{ $m->nim }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Mata Kuliah</label>
                <select name="matakuliah_id" class="form-control" required>
                    @foreach($matakuliah as $mk)
                        <option value="{{ $mk->id }}" {{ $nilai->matakuliah_id == $mk->id ? 'selected' : '' }}>
                            {{ $mk->kode_matakuliah }} - {{ $mk->nama_matakuliah }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nilai Tugas</label>
                <input type="number" name="nilai_tugas" class="form-control" step="0.01" min="0" max="100" value="{{ $nilai->nilai_tugas }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nilai UTS</label>
                <input type="number" name="nilai_uts" class="form-control" step="0.01" min="0" max="100" value="{{ $nilai->nilai_uts }}">
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Nilai UAS</label>
                <input type="number" name="nilai_uas" class="form-control" step="0.01" min="0" max="100" value="{{ $nilai->nilai_uas }}">
            </div>

            <div class="alert alert-info small">
                <i class="bi bi-info-circle"></i> Bobot: Tugas 20% | UTS 40% | UAS 40%
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
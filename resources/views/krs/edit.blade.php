<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit KRS - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">
        <h5 class="mb-1 fw-semibold">Edit KRS</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data KRS di bawah ini.</p>

        <form action="{{ route('krs.update', $krs->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Mahasiswa</label>
                <select name="mahasiswa_id" class="form-control" required>
                    @foreach($mahasiswa as $m)
                        <option value="{{ $m->id }}" {{ $krs->mahasiswa_id == $m->id ? 'selected' : '' }}>
                            {{ $m->nama }} ({{ $m->nim }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Mata Kuliah</label>
                <select name="matakuliah_id" class="form-control" required>
                    @foreach($matakuliah as $mk)
                        <option value="{{ $mk->id }}" {{ $krs->matakuliah_id == $mk->id ? 'selected' : '' }}>
                            {{ $mk->kode_matakuliah }} - {{ $mk->nama_matakuliah }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Semester</label>
                <input type="text" name="semester" class="form-control" value="{{ $krs->semester }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Tahun Akademik</label>
                <input type="text" name="tahun_akademik" class="form-control" value="{{ $krs->tahun_akademik }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Status</label>
                <select name="status" class="form-control">
                    <option value="aktif" {{ $krs->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="batal" {{ $krs->status == 'batal' ? 'selected' : '' }}>Batal</option>
                    <option value="selesai" {{ $krs->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('krs.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
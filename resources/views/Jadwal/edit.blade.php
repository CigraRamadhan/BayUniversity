<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Edit Jadwal</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data jadwal sesuai kebutuhan.</p>

        <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Mata Kuliah</label>
                <input type="text" name="mata_kuliah" class="form-control" value="{{ old('mata_kuliah', $jadwal->mata_kuliah) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Dosen</label>
                <input type="text" name="dosen" class="form-control"
                    value="{{ old('dosen', $jadwal->dosen) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Kelas</label>
                <input type="text" name="kelas" class="form-control" value="{{ old('kelas', $jadwal->kelas) }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Hari</label>
                <input type="text" name="hari" class="form-control" value="{{ old('hari', $jadwal->hari) }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Jam Mulai</label>
                <textarea name="jam_mulai" class="form-control" rows="3"
                    required>{{ old('jam_mulai', $jadwal->jam_mulai) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Jam Mulai</label>
                <textarea name="jam_selesai" class="form-control" rows="3"
                    required>{{ old('jam_selesai', $jadwal->jam_selesai) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Ruangan</label>
                <textarea name="ruangan" class="form-control" rows="3"
                    required>{{ old('ruangan', $jadwal->ruangan) }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
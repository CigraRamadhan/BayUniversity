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

        <h5 class="mb-1 fw-semibold">Edit mahasiswa</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data mahasiswa sesuai kebutuhan.</p>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama', $mahasiswa->nama) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">NIM</label>
                <input type="text" name="nim" class="form-control"
                    value="{{ old('nim', $mahasiswa->nim) }}" required>
            </div>

            
            <div class="mb-3">
                <label class="form-label fw-semibold">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Kelas</label>
                <input type="text" name="kelas" class="form-control" value="{{ old('kelas', $mahasiswa->kelas) }}"
                    required>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
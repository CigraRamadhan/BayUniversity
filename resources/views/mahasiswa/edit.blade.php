<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">
        <h5 class="mb-1 fw-semibold">Edit Mahasiswa</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data mahasiswa di bawah ini.</p>

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Jurusan</label>
                <select name="jurusan_id" class="form-control" required>
                    @foreach($jurusan as $j)
                        <option value="{{ $j->id }}" {{ $mahasiswa->jurusan_id == $j->id ? 'selected' : '' }}>
                            {{ $j->nama_jurusan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Kelas</label>
                <select name="kelas_id" class="form-control" required>
                    @foreach($kelas as $k)
                        <option value="{{ $k->id }}" {{ $mahasiswa->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
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
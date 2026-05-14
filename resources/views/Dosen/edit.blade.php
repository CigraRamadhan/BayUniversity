<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Edit Dosen</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data dosen sesuai kebutuhan.</p>

        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">NIDN</label>
                <input type="text" name="nidn" class="form-control" value="{{ old('nidn', $dosen->nidn) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control"
                    value="{{ old('nama_dosen', $dosen->nama_dosen) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $dosen->email) }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nomor Handphone</label>
                <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp', $dosen->no_hp) }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3"
                    required>{{ old('alamat', $dosen->alamat) }}</textarea>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
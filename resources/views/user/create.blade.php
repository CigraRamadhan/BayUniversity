<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Tambah User</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Isi semua field di bawah ini.</p>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="text" name="password" class="form-control" required>
            </div>

            
            <div class="mb-3">
                <label class="form-label fw-semibold">Role</label>
                <input type="text" name="role" class="form-control"  required>
            </div>
            
            <div class="d-flex gap-2">
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
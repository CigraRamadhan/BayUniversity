<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-white">

    <div class="container" style="max-width: 540px; margin-top: 48px;">

        <h5 class="mb-1 fw-semibold">Edit User</h5>
        <p class="text-muted mb-4" style="font-size: 0.875rem;">Ubah data user sesuai kebutuhan.</p>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" value="{{ old('username', $user->username) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="text" name="password" class="form-control"
                    value="{{ old('password', $user->password) }}" required>
            </div>

            
            <div class="mb-3">
                <label class="form-label fw-semibold">Role</label>
                <input type="text" name="role" class="form-control" value="{{ old('role', $user->role) }}" required>
            </div>
            

            <div class="d-flex gap-2">
                <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
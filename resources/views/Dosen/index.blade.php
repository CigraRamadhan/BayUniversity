<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <div class="container" style="max-width: 1200px; margin-top: 48px;">
        <!-- Menu Home -->
        <div class="mb-3">
            <a href="/" class="btn btn-secondary btn-sm"><i class="bi bi-house-door"></i> Home</a>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0 fw-semibold">Data Dosen</h5>
            <a href="{{ route('dosen.create') }}" class="btn btn-primary btn-sm">Tambah Dosen</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr><th>No</th><th>NIDN</th><th>Nama Dosen</th><th>Email</th><th>No HP</th><th>Alamat</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    @forelse($dosen as $index => $d)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $d->nidn }}</td>
                        <td>{{ $d->nama_dosen }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->no_hp }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>
                            <a href="{{ route('dosen.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dosen.destroy', $d->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <td><td colspan="7" class="text-center">Belum ada data dosen</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
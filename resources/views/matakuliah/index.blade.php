<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <div class="container" style="max-width: 1000px; margin-top: 48px;">
        <!-- Menu Home -->
        <div class="mb-3">
            <a href="/" class="btn btn-secondary btn-sm"><i class="bi bi-house-door"></i> Home</a>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0 fw-semibold">Data Mata Kuliah</h5>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-primary btn-sm">Tambah Mata Kuliah</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr><th>No</th><th>Kode</th><th>Nama Mata Kuliah</th><th>SKS</th><th>Semester</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    @forelse($matakuliah as $index => $mk)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $mk->kode_matakuliah }}</td>
                        <td>{{ $mk->nama_matakuliah }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td>{{ $mk->semester }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <td><td colspan="6" class="text-center">Belum ada data mata kuliah</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
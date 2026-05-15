<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jadwal - BayUniversity</title>
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
            <h5 class="mb-0 fw-semibold">Data Jadwal</h5>
            <a href="{{ route('jadwal.create') }}" class="btn btn-primary btn-sm">Tambah Jadwal</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr><th>No</th><th>Kode Jadwal</th><th>Mata Kuliah</th><th>Dosen</th><th>Hari</th><th>Jam</th><th>Ruangan</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    @forelse($jadwal as $index => $j)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $j->kode_jadwal }}</td>
                        <td>{{ $j->matakuliah->nama_matakuliah ?? '-' }}</td>
                        <td>{{ $j->dosen->nama_dosen ?? '-' }}</td>
                        <td>{{ $j->hari }}</td>
                        <td>{{ $j->jam }}</td>
                        <td>{{ $j->ruangan }}</td>
                        <td>
                            <a href="{{ route('jadwal.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('jadwal.destroy', $j->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="8" class="text-center">Belum ada data jadwal</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data KRS - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <div class="container" style="max-width: 1200px; margin-top: 48px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0 fw-semibold">Data KRS</h5>
            <a href="{{ route('krs.create') }}" class="btn btn-primary btn-sm">Tambah KRS</a>
        </div>

        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

        <table class="table table-bordered">
            <thead><tr><th>No</th><th>Mahasiswa</th><th>Mata Kuliah</th><th>Semester</th><th>Tahun Akademik</th><th>Status</th><th>Aksi</th></tr></thead>
            <tbody>
                @forelse($krs as $index => $k)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $k->mahasiswa->nama ?? '-' }}</td>
                    <td>{{ $k->matakuliah->nama_matakuliah ?? '-' }}</td>
                    <td>{{ $k->semester }}</td>
                    <td>{{ $k->tahun_akademik }}</td>
                    <td>{{ $k->status }}</td>
                    <td>
                        <a href="{{ route('krs.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('krs.destroy', $k->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="7" class="text-center">Belum ada data KRS</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
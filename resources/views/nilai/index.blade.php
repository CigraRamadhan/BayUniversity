<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai - BayUniversity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <div class="container" style="max-width: 1200px; margin-top: 48px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h5 class="mb-1 fw-semibold">Data Nilai</h5>
                <p class="text-muted">Kelola nilai mahasiswa</p>
            </div>
            <a href="{{ route('nilai.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Nilai
            </a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Mahasiswa</th>
                            <th>Mata Kuliah</th>
                            <th>Tugas</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Nilai Akhir</th>
                            <th>Grade</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($nilai as $index => $n)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $n->mahasiswa->nama ?? '-' }}</td>
                            <td>{{ $n->matkul->nama_matkul ?? '-' }}</td>
                            <td>{{ $n->nilai_tugas ?? '-' }}</td>
                            <td>{{ $n->nilai_uts ?? '-' }}</td>
                            <td>{{ $n->nilai_uas ?? '-' }}</td>
                            <td>{{ $n->nilai_akhir ?? '-' }}</td>
                            <td><strong>{{ $n->grade ?? '-' }}</strong></td>
                            <td>
                                <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center py-4">Belum ada data nilai</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="/" class="btn btn-secondary">Kembali ke Dashboard</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
        <!-- Menu Home -->
        <div class="mb-3">
            <a href="/" class="btn btn-secondary btn-sm"><i class="bi bi-house-door"></i> Home</a>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="mb-0 fw-semibold">Data Nilai</h5>
            <a href="{{ route('nilai.create') }}" class="btn btn-primary btn-sm">Tambah Nilai</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
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
                            <td>{{ $n->nama_mahasiswa}}</td>
                            <td>{{ $n->mata_kuliah}}</td>
                            <td>{{ $n->tugas}}</td>
                            <td>{{ $n->uts}}</td>
                            <td>{{ $n->uas}}</td>
                            <td>{{ $n->nilai_akhir}}</td>
                            <td>{{ $n->grade}}</td>
                            <td>
                                <a href="{{ route('nilai.edit', $n->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('nilai.destroy', $n->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <td>
                        <td colspan="9" class="text-center">Belum ada data nilai</td>
                        </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
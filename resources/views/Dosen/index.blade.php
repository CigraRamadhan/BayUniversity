<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Dosen</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <div class="container mt-4">
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Data Dosen</h1>
                <a href="{{ route('dosen.create') }}" class="btn btn-success">Tambah Dosen</a>
            </div>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th> </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach($dosen as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->nidn }}</td>
                        <td>{{ $d->nama_dosen }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->no_hp}}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>
                            <a href="{{ route('dosen.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('dosen.destroy', $d->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
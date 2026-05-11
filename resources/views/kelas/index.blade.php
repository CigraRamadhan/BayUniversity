<!DOCTYPE html>
<html>
<head>
    <title>Data Kelas</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn-add { background: green; color: white; padding: 5px 10px; text-decoration: none; }
        .btn-edit { background: blue; color: white; padding: 5px 10px; text-decoration: none; }
        .btn-delete { background: red; color: white; padding: 5px 10px; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Data Kelas</h1>
    <a href="{{ route('kelas.create') }}" class="btn-add">+ Tambah Kelas</a>
    <br><br>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $k)
            <tr>
                <td>{{ $k->id }}</td>
                <td>{{ $k->kode_kelas }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td>
                    <a href="{{ route('kelas.edit', $k->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
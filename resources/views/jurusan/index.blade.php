<!DOCTYPE html>
<html>
<head>
    <title>Data Jurusan</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 5px 10px; text-decoration: none; margin: 2px; display: inline-block; }
        .btn-add { background-color: green; color: white; }
        .btn-edit { background-color: blue; color: white; }
        .btn-delete { background-color: red; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Data Jurusan</h1>
    <a href="{{ route('jurusan.create') }}" class="btn btn-add">+ Tambah Jurusan</a>
    <br><br>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Jurusan</th>
                <th>Nama Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jurusan as $j)
            <tr>
                <td>{{ $j->id }}</td>
                <td>{{ $j->kode_jurusan }}</td>
                <td>{{ $j->nama_jurusan }}</td>
                <td>
                    <a href="{{ route('jurusan.edit', $j->id) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('jurusan.destroy', $j->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
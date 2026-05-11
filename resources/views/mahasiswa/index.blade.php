<!DOCTYPE html>
<html>
<head><title>Data Mahasiswa</title>
<style>table,th,td{border:1px solid #ddd;border-collapse:collapse;padding:8px;}th{background:#f2f2f2;}</style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a><br><br>
    <table>
        <thead>
            <tr><th>ID</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Kelas</th><th>Aksi</th></tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $m)
            <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->jurusan->nama_jurusan ?? '-' }}</td>
                <td>{{ $m->kelas->nama_kelas ?? '-' }}</td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
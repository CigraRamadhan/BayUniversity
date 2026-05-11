<!DOCTYPE html>
<html>
<head><title>Edit Mahasiswa</title></head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf @method('PUT')
        <p>Nama: <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required></p>
        <p>NIM: <input type="text" name="nim" value="{{ $mahasiswa->nim }}" required></p>
        <p>Jurusan:
            <select name="jurusan_id">
                @foreach($jurusan as $j)
                <option value="{{ $j->id }}" {{ $mahasiswa->jurusan_id == $j->id ? 'selected' : '' }}>
                    {{ $j->nama_jurusan }}
                </option>
                @endforeach
            </select>
        </p>
        <p>Kelas:
            <select name="kelas_id">
                @foreach($kelas as $k)
                <option value="{{ $k->id }}" {{ $mahasiswa->kelas_id == $k->id ? 'selected' : '' }}>
                    {{ $k->nama_kelas }}
                </option>
                @endforeach
            </select>
        </p>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head><title>Tambah Mahasiswa</title></head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <p>Nama: <input type="text" name="nama" required></p>
        <p>NIM: <input type="text" name="nim" required></p>
        <p>Jurusan:
            <select name="jurusan_id">
                <option value="">Pilih</option>
                @foreach($jurusan as $j)
                <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                @endforeach
            </select>
        </p>
        <p>Kelas:
            <select name="kelas_id">
                <option value="">Pilih</option>
                @foreach($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                @endforeach
            </select>
        </p>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</body>
</html>
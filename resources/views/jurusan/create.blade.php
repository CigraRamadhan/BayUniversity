<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jurusan</title>
</head>
<body>
    <h1>Tambah Jurusan</h1>
    
    <form action="{{ route('jurusan.store') }}" method="POST">
        @csrf
        
        <p>
            <label>Kode Jurusan:</label><br>
            <input type="text" name="kode_jurusan" required>
        </p>
        
        <p>
            <label>Nama Jurusan:</label><br>
            <input type="text" name="nama_jurusan" required>
        </p>
        
        <button type="submit">Simpan</button>
    </form>
    
    <br>
    <a href="{{ route('jurusan.index') }}">Kembali</a>
</body>
</html>
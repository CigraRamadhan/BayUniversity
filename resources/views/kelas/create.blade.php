<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kelas</title>
</head>
<body>
    <h1>Tambah Kelas</h1>
    
    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        
        <p>
            <label>Kode Kelas:</label><br>
            <input type="text" name="kode_kelas" required>
        </p>
        
        <p>
            <label>Nama Kelas:</label><br>
            <input type="text" name="nama_kelas" required>
        </p>
        
        <button type="submit">Simpan</button>
    </form>
    
    <br>
    <a href="{{ route('kelas.index') }}">Kembali</a>
</body>
</html>
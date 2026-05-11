<!DOCTYPE html>
<html>
<head>
    <title>Edit Kelas</title>
</head>
<body>
    <h1>Edit Kelas</h1>
    
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <p>
            <label>Kode Kelas:</label><br>
            <input type="text" name="kode_kelas" value="{{ $kelas->kode_kelas }}" required>
        </p>
        
        <p>
            <label>Nama Kelas:</label><br>
            <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" required>
        </p>
        
        <button type="submit">Update</button>
    </form>
    
    <br>
    <a href="{{ route('kelas.index') }}">Kembali</a>
</body>
</html>
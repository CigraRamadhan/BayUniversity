<!DOCTYPE html>
<html>
<head>
    <title>Edit Jurusan</title>
</head>
<body>
    <h1>Edit Jurusan</h1>
    
    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <p>
            <label>Kode Jurusan:</label><br>
            <input type="text" name="kode_jurusan" value="{{ $jurusan->kode_jurusan }}" required>
        </p>
        
        <p>
            <label>Nama Jurusan:</label><br>
            <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" required>
        </p>
        
        <button type="submit">Update</button>
    </form>
    
    <br>
    <a href="{{ route('jurusan.index') }}">Kembali</a>
</body>
</html>
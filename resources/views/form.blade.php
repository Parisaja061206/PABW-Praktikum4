<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form action="/simpan" method="post">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
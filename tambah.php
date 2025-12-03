<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Tambah Siswa</title></head>
<body>
    <h2>Tambah Siswa</h2>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        <label>No Presensi:</label><br>
        <input type="number" name="nomor_presensi" required><br><br>
        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>
        <label>Foto (opsional):</label><br>
        <input type="file" name="foto"><br><br>
        <button type="submit">Simpan</button>
    </form>
    <p><a href="index.php">Kembali ke Daftar</a></p>
</body>
</html>

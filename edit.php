<?php
include 'config.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM siswa WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Edit Siswa</title></head>
<body>
    <h2>Edit Siswa</h2>
    <form action="proses_edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br><br>
        <label>No Presensi:</label><br>
        <input type="number" name="nomor_presensi" value="<?= $row['nomor_presensi'] ?>" required><br><br>
        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="<?= $row['kelas'] ?>" required><br><br>
        <label>Ganti Foto (opsional):</label><br>
        <input type="file" name="foto"><br>
        <?php if ($row['foto_filename']) {
            echo "<br>Foto saat ini: <br><img src='uploads/".$row['foto_filename']."' width='100'><br><br>";
        } ?>
        <button type="submit">Update</button>
    </form>
    <p><a href="index.php">Kembali ke Daftar</a></p>
</body>
</html>

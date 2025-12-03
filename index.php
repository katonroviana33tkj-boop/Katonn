<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Siswa Simple</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href="tambah.php">+ Tambah Siswa</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Presensi</th>
            <th>Kelas</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
        $res = $conn->query("SELECT * FROM siswa ORDER BY id DESC");
        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['nomor_presensi']."</td>";
            echo "<td>".$row['kelas']."</td>";
            if ($row['foto_filename']) {
                echo "<td><img src='uploads/".$row['foto_filename']."' width='80'></td>";
            } else {
                echo "<td>–</td>";
            }
            echo "<td>
                    <a href='edit.php?id=".$row['id']."'>Edit</a> |
                    <a href='hapus.php?id=".$row['id']."' onclick=\"return confirm('Yakin dihapus?')\">Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

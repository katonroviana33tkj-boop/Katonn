<?php
include 'config.php';

$nama = $_POST['nama'];
$no = $_POST['nomor_presensi'];
$kelas = $_POST['kelas'];

$foto_filename = null;

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $tmp = $_FILES['foto']['tmp_name'];
    $fname = basename($_FILES['foto']['name']);
    // Untuk keamanan, bisa ditambahkan validasi ekstensi file, ukuran, dsb.
    move_uploaded_file($tmp, "uploads/".$fname);
    $foto_filename = $fname;
}

// Insert ke DB
$sql = "INSERT INTO siswa (nama, nomor_presensi, kelas, foto_filename)
        VALUES ('$nama', $no, '$kelas', ". ($foto_filename ? "'$foto_filename'" : "NULL") .")";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>

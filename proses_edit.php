<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$no = $_POST['nomor_presensi'];
$kelas = $_POST['kelas'];

$sql = "UPDATE siswa
        SET nama='$nama',
            nomor_presensi=$no,
            kelas='$kelas'";

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $tmp = $_FILES['foto']['tmp_name'];
    $fname = basename($_FILES['foto']['name']);
    move_uploaded_file($tmp, "uploads/".$fname);
    // tambahkan bagian update foto
    $sql .= ", foto_filename='$fname'";
}

$sql .= " WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>

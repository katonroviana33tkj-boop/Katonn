<?php
include 'config.php';
$id = $_GET['id'];

// (Opsional) ambil nama file foto untuk dihapus dari folder uploads
$row = $conn->query("SELECT foto_filename FROM siswa WHERE id=$id")->fetch_assoc();
if ($row && $row['foto_filename']) {
    $file = "uploads/".$row['foto_filename'];
    if (file_exists($file)) {
        unlink($file);
    }
}

$conn->query("DELETE FROM siswa WHERE id=$id");
header("Location: index.php");
?>

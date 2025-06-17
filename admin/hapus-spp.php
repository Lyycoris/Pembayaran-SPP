<?php
include '../koneksi.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan'); window.location.href='admin.php?url=spp';</script>";
    exit;
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp = '$id'");

if ($query) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='admin.php?url=spp';</script>";
} else {
    echo "<script>alert('Gagal menghapus data'); window.location.href='admin.php?url=spp';</script>";
}
?>

<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_spp = $_POST['id_spp'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nisn = $_POST['nisn'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $query = "UPDATE spp SET 
                nama = '$nama',
                kelas = '$kelas',
                nisn = '$nisn',
                tahun = '$tahun',
                nominal = '$nominal'
              WHERE id_spp = '$id_spp'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href='admin.php?url=spp';</script>";
    } else {
        echo "<script>alert('Gagal update data: " . mysqli_error($koneksi) . "'); window.location.href='admin.php?url=spp';</script>";
    }
}
?>

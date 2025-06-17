<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama    = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kelas   = mysqli_real_escape_string($koneksi, $_POST['kelas']);
    $nisn    = mysqli_real_escape_string($koneksi, $_POST['nisn']);
    $tahun   = mysqli_real_escape_string($koneksi, $_POST['tahun']);
    $nominal = mysqli_real_escape_string($koneksi, $_POST['nominal']);

    $query = "INSERT INTO spp ( nama, kelas, nisn, tahun, nominal) 
            VALUES ('$nama', '$kelas', '$nisn', '$tahun', '$nominal')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='admin.php?url=spp';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data: " . mysqli_error($koneksi) . "'); window.location.href='admin.php?url=spp';</script>";
    }
}
?>

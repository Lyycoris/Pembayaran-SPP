<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Ambil data admin dari database
    $query = "SELECT * FROM petugas WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {
        $data = mysqli_fetch_assoc($result);

        // Verifikasi password (jika tidak pakai hash)
        if ($password === $data['password']) {
        // Jika pakai hash:
        // if (password_verify($password, $data['password'])) {

            $_SESSION['id_petugas']   = $data['id_petugas'];
            $_SESSION['username']     = $data['username'];
            $_SESSION['nama_petugas'] = $data['nama_petugas'];
            $_SESSION['level']        = $data['level'];

            $level = strtolower($data['level']);

            if ($level == 'admin') {
                header("Location: admin/admin.php");
            } elseif ($level == 'petugas') {
                header("Location: petugas.php");
            } else {
                echo "<script>alert('Level pengguna tidak dikenali!'); window.location.href='index2.php';</script>";
            }
            exit();
        } else {
            echo "<script>alert('Password salah!'); window.location.href='index2.php';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location.href='index2.php';</script>";
    }
} else {
    header("Location: index2.php");
    exit();
}
?>

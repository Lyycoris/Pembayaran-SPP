<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Sesi Anda telah berakhir. Silakan login kembali.'); window.location.href='../index2.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="admin.php">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item mx-2"><a class="nav-link active" href="admin.php">Administrasi</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="admin.php?url=spp">SPP</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="admin.php?url=kelas">Kelas</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="admin.php?url=siswa">Siswa</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="admin.php?url=petugas">Petugas</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="admin.php?url=pembayaran">Pembayaran</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="admin.php?url=laporan">Laporan</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link text-danger" href="admin.php?url=logout" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Konten Utama -->
<main class="container my-5">
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h2 class="card-title">Selamat datang!</h2>
            <p class="card-text">Anda login sebagai <strong>Admin</strong>.</p>
        </div>
    </div>

    <!-- Konten dinamis berdasarkan URL -->
    <div class="card shadow-sm">
        <div class="card-body">
            <?php
            $file = @$_GET['url'];
            if (empty($file)) {
                echo '<p>Selamat datang di halaman admin!</p>';
                echo '<p>Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa.</p>';
            } else {
                include $file . '.php';
            }
            ?>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

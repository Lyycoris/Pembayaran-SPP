<?php
include '../koneksi.php';

if (!isset($_GET['id'])) {
    echo "<script>alert('ID tidak ditemukan'); window.location.href='spp';</script>";
    exit;
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp = '$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan'); window.location.href='admin.php?url=spp';</script>";
    exit;
}
?>

<div class="container">
    <h3 class="mb-4">Edit Data SPP</h3>
    <form method="POST" action="proses-edit-spp.php">
        <input type="hidden" name="id_spp" value="<?= $data['id_spp'] ?>">
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="kelas">Kelas/Jurusan</label>
            <input type="text" name="kelas" class="form-control" value="<?= $data['kelas'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nisn">NISN</label>
            <input type="number" name="nisn" class="form-control" value="<?= $data['nisn'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="number" name="tahun" class="form-control" value="<?= $data['tahun'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nominal">Nominal</label>
            <input type="number" name="nominal" class="form-control" value="<?= $data['nominal'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="admin.php?url=spp" class="btn btn-secondary">Batal</a>
    </form>
</div>

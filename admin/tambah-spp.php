<h3 class="mb-4">Tambah Data SPP</h3>
<a href="?url=spp" class="btn btn-secondary">Kembali</a>
<form method="POST" action="proses-tambah-spp.php" class="mb-4">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">Kelas/Jurusan</label>
        <input type="text" class="form-control" id="kelas" name="kelas" required>
    </div>
    <div class="mb-3">
        <label for="nisn" class="form-label">NISN</label>
        <input type="text" class="form-control" id="nisn" name="nisn" required>
    </div>
    <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="number" class="form-control" id="tahun" name="tahun" required>
    </div>
    <div class="mb-3">
        <label for="nominal" class="form-label">Nominal</label>
        <input type="number" class="form-control" id="nominal" name="nominal" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger">Clear</button>
</form>

<?php
include '../koneksi.php';
?>

<div class="container">
    <h3 class="mb-4">Tambah Data Kelas</h3>
    <a href="?url=tambah-kelas" class="btn btn-success mb-3">+ Tambah Data</a>

    <h4>Daftar Kelas</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY id_kelas DESC");
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['nama_kelas']}</td>
                        <td>{$row['kompetensi_keahlian']}</td>
                        <td><a href='?url=edit-kelas&id={$row['id_kelas']}' class='btn btn-warning btn-sm'>Edit</a></td>
                        <td><a href='?url=hapus-kelas&id={$row['id_kelas']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a></td>
                    </tr>";
                $no++;
            }            
            ?>
        </tbody>
    </table>
</div>

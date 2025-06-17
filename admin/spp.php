    <?php

    include '../koneksi.php';
    ?>

    <div class="container">
        <h3 class="mb-4">Tambah Data SPP</h3>
        <a href="?url=tambah-spp" class="btn btn-success mb-3">+ Tambah Data</a>

        <h4>Daftar SPP</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas/Jurusan</th>
                    <th>NISN</th>
                    <th>Tahun</th>
                    <th>Nominal</th>
                    <th>Edit</th>,
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($koneksi, "SELECT * FROM spp ORDER BY tahun DESC");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['kelas']}</td>
                            <td>{$row['nisn']}</td>
                            <td>{$row['tahun']}</td>
                            <td>Rp " . number_format($row['nominal'], 0, ',', '.') . "</td>
                            <td><a href='?url=edit-spp&id={$row['id_spp']}' class='btn btn-warning btn-sm'>Edit</a></td>
                            <td><a href='?url=hapus-spp&id={$row['id_spp']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a></td>
                    </tr>";
                    $no++;
                }            
                ?>
            </tbody>
        </table>
    </div>

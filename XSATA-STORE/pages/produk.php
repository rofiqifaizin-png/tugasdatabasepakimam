<?php
require_once "koneksi.php";
$query = mysqli_query($dbconnect, "SELECT * FROM tb_pegawai");
$no = 1;
?>
<h1 class="h2">Data Produk</h1>
<hr>
<p class="welcome-text">Selamat Datang di Halaman Produk</p>

<a href="index.php?page=produk_input" class="btn btn-primary mb-4">Input Produk</a>

<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
                <th>Agama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($tampil = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $tampil['id']; ?></td>
                <td><?php echo htmlspecialchars($tampil['nama']); ?></td>
                <td><?php echo htmlspecialchars($tampil['alamat']); ?></td>
                <td><?php echo htmlspecialchars($tampil['kelamin']); ?></td>
                <td><?php echo htmlspecialchars($tampil['nohp']); ?></td>
                <td><?php echo htmlspecialchars($tampil['agama']); ?></td>
                <td>
                    <a onclick="return confirm('Apakah Anda yakin menghapus data dengan id= <?php echo $tampil['id']; ?>')"
                       href="proseshapus.php?id=<?php echo $tampil['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    <a href="index.php?page=produk_edit&id=<?php echo $tampil['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

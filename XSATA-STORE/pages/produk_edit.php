<?php
require_once "koneksi.php";
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$query = mysqli_query($dbconnect, "SELECT * FROM `tb_pegawai` WHERE id = $id");
$tampil = mysqli_fetch_assoc($query);

if (!$tampil) {
    echo "<h2>Data tidak ditemukan</h2>";
    return;
}
?>
<h1 class="h2">Edit Produk</h1>
<hr>
<form action="prosesedit.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Id</label>
        <input name="id" type="text" class="form-control" required value="<?php echo $tampil['id']; ?>" readonly>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input name="nama" type="text" class="form-control" required value="<?php echo htmlspecialchars($tampil['nama']); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control" required value="<?php echo htmlspecialchars($tampil['alamat']); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Kelamin</label>
        <select class="form-select form-select-lg mb-3" name="kelamin">
            <option value="<?php echo htmlspecialchars($tampil['kelamin']); ?>" selected><?php echo htmlspecialchars($tampil['kelamin']); ?></option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">NoHp</label>
        <input name="nohp" type="number" class="form-control" required value="<?php echo htmlspecialchars($tampil['nohp']); ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Agama</label>
        <select class="form-select form-select-lg mb-3" name="agama">
            <option value="<?php echo htmlspecialchars($tampil['agama']); ?>" selected><?php echo htmlspecialchars($tampil['agama']); ?></option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="budha">budha</option>
            <option value="hindu">hindu</option>
            <option value="konghucu">konghucu</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php?page=produk" class="btn btn-secondary">Batal</a>
</form>

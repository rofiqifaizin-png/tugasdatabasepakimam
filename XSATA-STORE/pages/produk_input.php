<h1 class="h2">Input Produk</h1>
<hr>
<form action="prosesinputdatapegawai.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input name="nama" type="text" class="form-control" required placeholder="isikan nama anda">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control" required placeholder="isikan alamat anda">
    </div>

    <div class="mb-3">
        <label class="form-label">Kelamin</label>
        <select class="form-select form-select-lg mb-3" name="kelamin">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">NoHp</label>
        <input name="nohp" type="number" class="form-control" required placeholder="isikan no hp anda">
    </div>

    <div class="mb-3">
        <label class="form-label">Agama</label>
        <select class="form-select form-select-lg mb-3" name="agama">
            <option selected>Pilih Agama</option>
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

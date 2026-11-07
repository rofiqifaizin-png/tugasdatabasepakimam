<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$nohp = $_POST['nohp'];
$agama = $_POST['agama'];

mysqli_query($dbconnect, "INSERT INTO `tb_pegawai` (`id`, `nama`, `alamat`, `kelamin`, `nohp`, `agama`) VALUES (NULL, '$nama', '$alamat', '$kelamin', '$nohp', '$agama');");

header('location:index.php?page=produk');
?>

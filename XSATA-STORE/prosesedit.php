<?php
include 'koneksi.php';

$id = (int) $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$nohp = $_POST['nohp'];
$agama = $_POST['agama'];

mysqli_query($dbconnect, "UPDATE `tb_pegawai` SET `nama` = '$nama', `alamat` = '$alamat', `kelamin` = '$kelamin', `nohp` = '$nohp', `agama` = '$agama' WHERE `tb_pegawai`.`id` = $id");

header('location:index.php?page=produk');
?>

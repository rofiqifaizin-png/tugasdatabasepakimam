<?php
include 'koneksi.php';

$id = (int) $_GET['id'];
mysqli_query($dbconnect, "DELETE FROM tb_pegawai WHERE `tb_pegawai`.`id` = $id");

header('location:index.php?page=produk');
?>

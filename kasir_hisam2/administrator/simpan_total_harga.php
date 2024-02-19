<?php
include '../koneksi.php';

$total_harga = $_POST['total_harga'];
$penjualan_id = $_POST['penjualan_id'];
$pelanggan_id = $_POST['pelanggan_id'];

//menginput data ke database
mysqli_query($koneksi,"update penjualan set total_harga='$total_harga' where penjualan_id='$penjualan_id'");

header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");
?>
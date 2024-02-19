<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$pelanggan_id = $_POST['pelanggan_id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];


//update data ke database
mysqli_query($koneksi,"update pelanggan set nama_pelanggan='$nama_pelanggan',  alamat='$alamat',  nomor_telepon='$nomor_telepon' where pelanggan_id='$pelanggan_id'");

//mengalihkan
header("location:pembelian.php?pesan=update");

?>